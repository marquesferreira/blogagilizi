<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

use Cake\Utility\Text;
/**
 * Artigo Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categoria
 *
 * @method \App\Model\Entity\Artigo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Artigo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Artigo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Artigo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Artigo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Artigo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Artigo findOrCreate($search, callable $callback = null)
 */
class ArtigoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('artigo');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Categoria', [
            'foreignKey' => 'categoria_id',
            'joinType' => 'INNER'
        ]);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo' => [
                'fields' => [

                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'photo_dir', // defaults to `dir`
                    'size' => 'photo_size', // defaults to `size`
                    'type' => 'photo_type', // defaults to `type`
                ],

            ],
            'nameCallback' => 'filename',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('titulo');

        $validator
            ->allowEmpty('texto');

        $validator
            ->allowEmpty('photo');

        $validator
            ->dateTime('criado')
            ->allowEmpty('criado');

        $validator
            ->dateTime('modificado')
            ->allowEmpty('modificado');

        $validator
            ->allowEmpty('photo_dir');

        return $validator;
    }
public function fileRename($currentName,$data,$field) {

return $this->currentName;
}
    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['categoria_id'], 'Categoria'));

        return $rules;
    }
}
