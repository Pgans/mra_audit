<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mraopd67;

/**
 * MraopdSearch represents the model behind the search form of `app\models\Mraopd`.
 */
class MraopdSearch extends Mraopd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mra_id', 'unit_id', 'SC011', 'SC015', 'SC016', 'SC018', 'SC019', 'PEIM01', 'DEC01', 'SC021', 'SC022', 'SC023', 'SC024', 'SC025', 'SC026', 'SC027', 'PEIM02', 'DEC02', 'SC031', 'SC032', 'SC033', 'SC034', 'SC035', 'SC036', 'SC037', 'SC038', 'SC039', 'PEIM03', 'DEC03', 'SC041', 'SC042', 'SC043', 'SC044', 'SC045', 'SC046', 'SC047', 'SC048', 'SC049', 'PEIM04', 'DEC04', 'SC051', 'SC052', 'SC053', 'SC055', 'SC056', 'SC058', 'SC059', 'PEIM05', 'DEC05', 'SC061', 'SC062', 'SC063', 'SC064', 'SC065', 'SC066', 'SC067', 'SC068', 'SC069', 'PEIM06', 'DEC06', 'PEIM07', 'DEC07', 'PEIM08', 'DEC08', 'PEIM09', 'DEC09', 'PEIM10', 'DEC10'], 'integer'],
            [['HN', 'AN', 'dr_license', 'date_admit', 'date_discharge', 'date_audit', 'NA01', 'MI01', 'NO01', 'SC012', 'SC013', 'SC014', 'SC017', 'NA02', 'MI02', 'NO02', 'SC028', 'SC029', 'NA03', 'MI03', 'NO03', 'NA04', 'MI04', 'NO04', 'NA05', 'MI05', 'NO05', 'SC054', 'SC057', 'Followdate1', 'Followdate2', 'NA06', 'MI06', 'NO06', 'Followdate3', 'NA07', 'MI07', 'NO07', 'SC071', 'SC072', 'SC073', 'SC074', 'SC075', 'SC076', 'SC077', 'SC078', 'SC079', 'NA08', 'MI08', 'NO08', 'SC081', 'SC082', 'SC083', 'SC084', 'SC085', 'SC086', 'SC087', 'SC088', 'SC089', 'NA09', 'MI09', 'NO09', 'SC091', 'SC092', 'SC093', 'SC094', 'SC095', 'SC096', 'SC097', 'SC098', 'SC099', 'NA10', 'MI10', 'NO10', 'SC101', 'SC102', 'SC103', 'SC104', 'SC105', 'SC106', 'SC107', 'SC108', 'SC109', 'hospcode'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Mraopd::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'mra_id' => $this->mra_id,
            'unit_id' => $this->unit_id,
            'date_admit' => $this->date_admit,
            'date_discharge' => $this->date_discharge,
            'date_audit' => $this->date_audit,
            'SC011' => $this->SC011,
            'SC015' => $this->SC015,
            'SC016' => $this->SC016,
            'SC018' => $this->SC018,
            'SC019' => $this->SC019,
            'PEIM01' => $this->PEIM01,
            'DEC01' => $this->DEC01,
            'SC021' => $this->SC021,
            'SC022' => $this->SC022,
            'SC023' => $this->SC023,
            'SC024' => $this->SC024,
            'SC025' => $this->SC025,
            'SC026' => $this->SC026,
            'SC027' => $this->SC027,
            'PEIM02' => $this->PEIM02,
            'DEC02' => $this->DEC02,
            'SC031' => $this->SC031,
            'SC032' => $this->SC032,
            'SC033' => $this->SC033,
            'SC034' => $this->SC034,
            'SC035' => $this->SC035,
            'SC036' => $this->SC036,
            'SC037' => $this->SC037,
            'SC038' => $this->SC038,
            'SC039' => $this->SC039,
            'PEIM03' => $this->PEIM03,
            'DEC03' => $this->DEC03,
            'SC041' => $this->SC041,
            'SC042' => $this->SC042,
            'SC043' => $this->SC043,
            'SC044' => $this->SC044,
            'SC045' => $this->SC045,
            'SC046' => $this->SC046,
            'SC047' => $this->SC047,
            'SC048' => $this->SC048,
            'SC049' => $this->SC049,
            'PEIM04' => $this->PEIM04,
            'DEC04' => $this->DEC04,
            'SC051' => $this->SC051,
            'SC052' => $this->SC052,
            'SC053' => $this->SC053,
            'SC055' => $this->SC055,
            'SC056' => $this->SC056,
            'SC058' => $this->SC058,
            'SC059' => $this->SC059,
            'PEIM05' => $this->PEIM05,
            'DEC05' => $this->DEC05,
            'Followdate1' => $this->Followdate1,
            'Followdate2' => $this->Followdate2,
            'SC061' => $this->SC061,
            'SC062' => $this->SC062,
            'SC063' => $this->SC063,
            'SC064' => $this->SC064,
            'SC065' => $this->SC065,
            'SC066' => $this->SC066,
            'SC067' => $this->SC067,
            'SC068' => $this->SC068,
            'SC069' => $this->SC069,
            'PEIM06' => $this->PEIM06,
            'DEC06' => $this->DEC06,
            'Followdate3' => $this->Followdate3,
            'PEIM07' => $this->PEIM07,
            'DEC07' => $this->DEC07,
            'PEIM08' => $this->PEIM08,
            'DEC08' => $this->DEC08,
            'PEIM09' => $this->PEIM09,
            'DEC09' => $this->DEC09,
            'PEIM10' => $this->PEIM10,
            'DEC10' => $this->DEC10,
        ]);

        $query->andFilterWhere(['like', 'HN', $this->HN])
           // ->andFilterWhere(['like', 'AN', $this->AN])
            ->andFilterWhere(['like', 'dr_license', $this->dr_license])
            ->andFilterWhere(['like', 'NA01', $this->NA01])
            ->andFilterWhere(['like', 'MI01', $this->MI01])
            ->andFilterWhere(['like', 'NO01', $this->NO01])
            ->andFilterWhere(['like', 'SC012', $this->SC012])
            ->andFilterWhere(['like', 'SC013', $this->SC013])
            ->andFilterWhere(['like', 'SC014', $this->SC014])
            ->andFilterWhere(['like', 'SC017', $this->SC017])
            ->andFilterWhere(['like', 'NA02', $this->NA02])
            ->andFilterWhere(['like', 'MI02', $this->MI02])
            ->andFilterWhere(['like', 'NO02', $this->NO02])
            ->andFilterWhere(['like', 'SC028', $this->SC028])
            ->andFilterWhere(['like', 'SC029', $this->SC029])
            ->andFilterWhere(['like', 'NA03', $this->NA03])
            ->andFilterWhere(['like', 'MI03', $this->MI03])
            ->andFilterWhere(['like', 'NO03', $this->NO03])
            ->andFilterWhere(['like', 'NA04', $this->NA04])
            ->andFilterWhere(['like', 'MI04', $this->MI04])
            ->andFilterWhere(['like', 'NO04', $this->NO04])
            ->andFilterWhere(['like', 'NA05', $this->NA05])
            ->andFilterWhere(['like', 'MI05', $this->MI05])
            ->andFilterWhere(['like', 'NO05', $this->NO05])
            ->andFilterWhere(['like', 'SC054', $this->SC054])
            ->andFilterWhere(['like', 'SC057', $this->SC057])
            ->andFilterWhere(['like', 'NA06', $this->NA06])
            ->andFilterWhere(['like', 'MI06', $this->MI06])
            ->andFilterWhere(['like', 'NO06', $this->NO06])
            ->andFilterWhere(['like', 'NA07', $this->NA07])
            ->andFilterWhere(['like', 'MI07', $this->MI07])
            ->andFilterWhere(['like', 'NO07', $this->NO07])
            ->andFilterWhere(['like', 'SC071', $this->SC071])
            ->andFilterWhere(['like', 'SC072', $this->SC072])
            ->andFilterWhere(['like', 'SC073', $this->SC073])
            ->andFilterWhere(['like', 'SC074', $this->SC074])
            ->andFilterWhere(['like', 'SC075', $this->SC075])
            ->andFilterWhere(['like', 'SC076', $this->SC076])
            ->andFilterWhere(['like', 'SC077', $this->SC077])
            ->andFilterWhere(['like', 'SC078', $this->SC078])
            ->andFilterWhere(['like', 'SC079', $this->SC079])
            ->andFilterWhere(['like', 'NA08', $this->NA08])
            ->andFilterWhere(['like', 'MI08', $this->MI08])
            ->andFilterWhere(['like', 'NO08', $this->NO08])
            ->andFilterWhere(['like', 'SC081', $this->SC081])
            ->andFilterWhere(['like', 'SC082', $this->SC082])
            ->andFilterWhere(['like', 'SC083', $this->SC083])
            ->andFilterWhere(['like', 'SC084', $this->SC084])
            ->andFilterWhere(['like', 'SC085', $this->SC085])
            ->andFilterWhere(['like', 'SC086', $this->SC086])
            ->andFilterWhere(['like', 'SC087', $this->SC087])
            ->andFilterWhere(['like', 'SC088', $this->SC088])
            ->andFilterWhere(['like', 'SC089', $this->SC089])
            ->andFilterWhere(['like', 'NA09', $this->NA09])
            ->andFilterWhere(['like', 'MI09', $this->MI09])
            ->andFilterWhere(['like', 'NO09', $this->NO09])
            ->andFilterWhere(['like', 'SC091', $this->SC091])
            ->andFilterWhere(['like', 'SC092', $this->SC092])
            ->andFilterWhere(['like', 'SC093', $this->SC093])
            ->andFilterWhere(['like', 'SC094', $this->SC094])
            ->andFilterWhere(['like', 'SC095', $this->SC095])
            ->andFilterWhere(['like', 'SC096', $this->SC096])
            ->andFilterWhere(['like', 'SC097', $this->SC097])
            ->andFilterWhere(['like', 'SC098', $this->SC098])
            ->andFilterWhere(['like', 'SC099', $this->SC099])
            ->andFilterWhere(['like', 'NA10', $this->NA10])
            ->andFilterWhere(['like', 'MI10', $this->MI10])
            ->andFilterWhere(['like', 'NO10', $this->NO10])
            ->andFilterWhere(['like', 'SC101', $this->SC101])
            ->andFilterWhere(['like', 'SC102', $this->SC102])
            ->andFilterWhere(['like', 'SC103', $this->SC103])
            ->andFilterWhere(['like', 'SC104', $this->SC104])
            ->andFilterWhere(['like', 'SC105', $this->SC105])
            ->andFilterWhere(['like', 'SC106', $this->SC106])
            ->andFilterWhere(['like', 'SC107', $this->SC107])
            ->andFilterWhere(['like', 'SC108', $this->SC108])
            ->andFilterWhere(['like', 'SC109', $this->SC109])
            ->andFilterWhere(['like', 'hospcode', $this->hospcode]);

        return $dataProvider;
    }
}
