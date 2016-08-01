<?php
class tb_JobType{
    var $ID;
    var $TypeName;
    var $Enable;		
    var $CreateTime;
 /**
     * @return the $ID
     */
    public function getID()
    {
        return $this->ID;
    }

 /**
     * @param field_type $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

 /**
     * @return the $TypeName
     */
    public function getTypeName()
    {
        return $this->TypeName;
    }

 /**
     * @return the $Enable
     */
    public function getEnable()
    {
        return $this->Enable;
    }

 /**
     * @return the $CreateTime
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

 /**
     * @param field_type $TypeName
     */
    public function setTypeName($TypeName)
    {
        $this->TypeName = $TypeName;
    }

 /**
     * @param field_type $Enable
     */
    public function setEnable($Enable)
    {
        $this->Enable = $Enable;
    }

 /**
     * @param field_type $CreateTime
     */
    public function setCreateTime($CreateTime)
    {
        $this->CreateTime = $CreateTime;
    }

    public function jobtypeSelectAll(){
        $sql='select * from JobType';
        return $sql;
    }
    
    public function jobtypeSelectOne(){
        $sql="select * from JobType where ID=".$this->ID;
        return $sql;
    }
    
    public function jobtypeInsert(){
        $sql='insert into JobType(TypeName,Enable,CreateTime)';
        $sql.=" values ('".$this->TypeName."',1,'".$this->CreateTime."')";
        return $sql;
    }
    public function jobtypeDelete(){
        $sql="update JobType set Enable=0 where ID=".$this->getID();
        return $sql;
    }
    public function jobtypeUpdate(){
        $sql="update JobType set ";
        $sql.=" TypeName='".$this->TypeName."' where ID=".$this->ID;
        return $sql;
    }
    
   
    
}
