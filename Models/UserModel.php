<?php
    class UserModel extends BaseModel
    {
        const TABLE = 'user';

        public function getAll($select =['*'],$orderBy = [],$limit =15)
        {
           return $this->all(self::TABLE,$select,$orderBy,$limit);
        }
        public function findById($id)
        {
            return [
                'id'=>12,
                'name'=>'iphone12'
            ];
        }
        public function store($data)
        {
            $this->create(self::TABLE,$data);
        }
        public function updateData($id,$data)
        {
            $this->update(self::TABLE,$id,$data);
        }
        public function deleteData($id)
        {
            $this->delete(self::TABLE,$id);
        }
    }