<?php

namespace app\controllers;

use app\models\LoginForm;
use app\models\PasswordReset;
use app\models\PasswordResetByEmail;
use app\models\PasswordResetByUsername;
use app\models\User;
use Yii;
use yii\base\Action;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;

/**
 *
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Before Action
     *
     * @param Action $action
     * @return bool
     */
    public function beforeAction($action)
    {
        if (in_array($action->id, ['login', 'reset-password'])) {
            $this->layout = "login";
        }

        try {
            return parent::beforeAction($action);
        } catch (BadRequestHttpException $e) {
            Yii::error($e->getMessage());
        }
        return true;
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest) {
            return $this->redirect(['site/login']);
        }
        return $this->render('index');
    }

    /**
     * Login
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if (User::find()->count() == 0) {

            $admin = new User();
            $admin->role = 'ADMIN';
            $admin->username = 'admin';
            $admin->email = 'admin@kha.com';
            $admin->name = 'Admin';
            $admin->setPassword('123456');
            $admin->generateAuthKey();
            $admin->status = 1;
            $admin->save();

            $model->username = $admin->email;
            $model->password = '123456';

            Yii::$app->session->setFlash('success', Yii::t('app', 'Administrador master adicionado com sucesso'));
        }

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    /**
     * Reset Password
     *
     * @return string|Response
     */
    public function actionResetPassword()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new PasswordReset();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if (filter_var($model->emailusername, FILTER_VALIDATE_EMAIL)) {
                $byEmail = new PasswordResetByEmail();
                $byEmail->email = $model->emailusername;

                if ($byEmail->validate() && $byEmail->sendEmail()) {
                    Yii::$app->session
                        ->setFlash('success', Yii::t('app', 'Verifique o seu email para concluir o processo.'));

                    return $this->redirect(['login']);
                }
                $model->addError('emailusername', $byEmail->errors['email'][0]);
            } else {
                $byUsername = new PasswordResetByUsername();
                $byUsername->username = $model->emailusername;

                if ($byUsername->validate() && $byUsername->sendEmail()) {
                    Yii::$app->session
                        ->setFlash('success', Yii::t('app', 'Verifique o seu email para concluir o processo.'));

                    return $this->redirect(['login']);
                }
                $model->addError('emailusername', $byUsername->errors['username'][0]);
            }
        }

        return $this->render('reset-password', [
            'model' => $model,
        ]);
    }
}
