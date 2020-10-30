<?php

namespace backend\controllers;

use Yii;
use common\models\Profile;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProfileController implements the CRUD actions for Profile model.
 */
class ProfileController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Profile models.
     * @return mixed
     */
    public function actionIndex()
    {
        $id = Yii::$app->user->identity->id;
        $dataProvider = new ActiveDataProvider([
            'query' => Profile::find()->where(['user_id'=>$id])
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Profile model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Profile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {   
       
        $model = new Profile();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Profile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate()
    {   
        $id = Yii::$app->user->identity->id;
        $request = Yii::$app->request;
        $profilemodel = Profile::find()->where(['user_id'=>$id])->one();
       if ($request->isPost) {
           $nameTH=$request->post('fullname_th');
           $nameEN=$request->post('fullname_en');
           $gender=$request->post('sex');
           $birthday=$request->post('birth_date2');
           $Age=$request->post('age');
           $Address=$request->post('address');
           $city=$request->post('city');
           $state=$request->post('state');
           $zip=$request->post('zip');
           $latitude=$request->post('latitude');
           $longitude=$request->post('longitude');
           $mail=$request->post('mail');
           $facebook=$request->post('facebook');
           $link=$request->post('web_other_value');
           $status=$request->post('');
           $description=$request->post('introduce');
           $pathFolder = "../../frontend/web/uploads/" . str_pad($id, 5, '0', STR_PAD_LEFT) . "/";
            if (!file_exists($pathFolder)) {
                if (mkdir($pathFolder, 0755, true)) { } else {
                    die('failed');
                }
            }
                $pro_img = UploadedFile::getInstanceByName('pro_img');
        
            if (isset($pro_img->error) && $pro_img->error == 0) {
                $curFileName = $id . '_' . time() . '_';
                $imageName = '.' . $pro_img->getExtension();
                $path = $pathFolder . pathinfo($curFileName, PATHINFO_FILENAME);
               try {
                   if ($pro_img->saveAs($path . $imageName)) {
                     $slip_name = $curFileName.$imageName;
                     $profilemodel->pro_img = $slip_name;
                    }
               } catch (Exception $e) {
                  }
            }           
            
            $profilemodel->nameTH = $nameTH;
            $profilemodel->nameEN = $nameEN;
            $profilemodel->gender = $gender;
            $profilemodel->birthday =  strtotime($birthday);
            $profilemodel->Age = $Age;
            $profilemodel->city = $city;
            $profilemodel->address = $Address;
            $profilemodel->state = $state;
            $profilemodel->zip = $zip;
            $profilemodel->latitude = $latitude;
            $profilemodel->longitude = $longitude;
            $profilemodel->mail = $mail;
            $profilemodel->facebook = $facebook;
            $profilemodel->link = $link;
            $profilemodel->user_id = $id;
            $profilemodel->description = $description;
            $profilemodel->date_create = time();
            $profilemodel->date_update = time();
            $profilemodel->status = $status;
            $profilemodel->save();
       
            if ($profilemodel->save()) {
                return $this->redirect(['view', 'id' => $profilemodel->id]);

            } else {
                print_r($profilemodel->getErrors());
                die();
            }
        }
        return $this->render('update', [
            'profilemodel' => $profilemodel,
        ]);
    }

    /**
     * Deletes an existing Profile model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Profile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Profile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Profile::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
