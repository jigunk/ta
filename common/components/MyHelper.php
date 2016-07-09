<?php

namespace common\components;

use yii\base\Component;
use common\models\User;
use common\models\Progdi;
use common\models\Ujian;
use common\models\Mahasiswa;



use Yii;
use yii\helpers\Html;

class MyHelper extends Component {



   public function User($id) {
        $user = \common\models\User::find()
                ->where(['id' => $id])
                ->one();

        return $user;
    }

    public function Progdi($id) {
        $user = \common\models\Progdi::find()
                ->where(['kd_progdi' => $id])
                ->one();

        return $user;
    }

     public function Dosen($id) {
        $user = \common\models\Dosen::find()
                ->where(['nim' => $id])
                ->one();

        return $user;
    }

     public function Ujian($id) {
        $user = \common\models\Ujian::find()
                ->where(['nim' => $id])
                ->one();

        return $user;
    }

    


}
