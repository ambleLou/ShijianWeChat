<?php

class tb_JobDetail{
    var $ID ="";
    var $JobID="";
    var $NeedSex="";
    var $NeedQty="";
    var $AvailQty="";
    var $GatherTime="";
    var $DisbandTime="";
    var $GatherLoc="";
    var $Description="";
    var $HasInterView="";
    var $HasEatting	="";
    var $HasSleepping="";
    var $Task="";
    var $Others="";
    var $CreateTime	="";
    var $ModifyTime="";
    /**
     * @return the $DisbandTime
     */
    public function getDisbandTime()
    {
        return $this->DisbandTime;
    }

    /**
     * @param string $DisbandTime
     */
    public function setDisbandTime($DisbandTime)
    {
        $this->DisbandTime = $DisbandTime;
    }

    /**
     * @return the $ID
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @return the $JobID
     */
    public function getJobID()
    {
        return $this->JobID;
    }

    /**
     * @return the $NeedSex
     */
    public function getNeedSex()
    {
        return $this->NeedSex;
    }

    /**
     * @return the $NeedQty
     */
    public function getNeedQty()
    {
        return $this->NeedQty;
    }

    /**
     * @return the $AvailQty
     */
    public function getAvailQty()
    {
        return $this->AvailQty;
    }

    /**
     * @return the $GatherTime
     */
    public function getGatherTime()
    {
        return $this->GatherTime;
    }

    /**
     * @return the $GatherLoc
     */
    public function getGatherLoc()
    {
        return $this->GatherLoc;
    }

    /**
     * @return the $Description
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @return the $HasInterView
     */
    public function getHasInterView()
    {
        return $this->HasInterView;
    }

    /**
     * @return the $HasEatting
     */
    public function getHasEatting()
    {
        return $this->HasEatting;
    }

    /**
     * @return the $HasSleepping
     */
    public function getHasSleepping()
    {
        return $this->HasSleepping;
    }

    /**
     * @return the $Task
     */
    public function getTask()
    {
        return $this->Task;
    }

    /**
     * @return the $Others
     */
    public function getOthers()
    {
        return $this->Others;
    }

    /**
     * @return the $CreateTime
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     * @return the $ModifyTime
     */
    public function getModifyTime()
    {
        return $this->ModifyTime;
    }

    /**
     * @param string $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @param string $JobID
     */
    public function setJobID($JobID)
    {
        $this->JobID = $JobID;
    }

    /**
     * @param string $NeedSex
     */
    public function setNeedSex($NeedSex)
    {
        $this->NeedSex = $NeedSex;
    }

    /**
     * @param string $NeedQty
     */
    public function setNeedQty($NeedQty)
    {
        $this->NeedQty = $NeedQty;
    }

    /**
     * @param string $AvailQty
     */
    public function setAvailQty($AvailQty)
    {
        $this->AvailQty = $AvailQty;
    }

    /**
     * @param string $GatherTime
     */
    public function setGatherTime($GatherTime)
    {
        $this->GatherTime = $GatherTime;
    }

    /**
     * @param string $GatherLoc
     */
    public function setGatherLoc($GatherLoc)
    {
        $this->GatherLoc = $GatherLoc;
    }

    /**
     * @param string $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @param string $HasInterView
     */
    public function setHasInterView($HasInterView)
    {
        $this->HasInterView = $HasInterView;
    }

    /**
     * @param string $HasEatting
     */
    public function setHasEatting($HasEatting)
    {
        $this->HasEatting = $HasEatting;
    }

    /**
     * @param string $HasSleepping
     */
    public function setHasSleepping($HasSleepping)
    {
        $this->HasSleepping = $HasSleepping;
    }

    /**
     * @param string $Task
     */
    public function setTask($Task)
    {
        $this->Task = $Task;
    }

    /**
     * @param string $Others
     */
    public function setOthers($Others)
    {
        $this->Others = $Others;
    }

    /**
     * @param string $CreateTime
     */
    public function setCreateTime($CreateTime)
    {
        $this->CreateTime = $CreateTime;
    }

    /**
     * @param string $ModifyTime
     */
    public function setModifyTime($ModifyTime)
    {
        $this->ModifyTime = $ModifyTime;
    }


    public function jobIDSelect() {
        $sql="select * from JobDetail where JobID=".$this->JobID;
        return $sql;
    }

    public function jobDetailInsert() {
        $sql="insert into JobDetail( JobID,NeedSex,NeedQty,AvailQty,GatherTime,DisbandTime,GatherLoc,Description,HasInterView,HasEatting,HasSleepping,Task,Others,CreateTime,ModifyTime)";
        $sql.=" values ('".$this->JobID."','".$this->NeedSex."','".$this->NeedQty."','".$this->AvailQty."','".$this->GatherTime."','".$this->DisbandTime."','".$this->GatherLoc."','".$this->Description."','".$this->HasInterView."','".$this->HasEatting."','".$this->HasSleepping."','".$this->Task."','".$this->Others."','".$this->CreateTime."','".$this->ModifyTime."')";
        return $sql;
    }

    public function contactNumberSave($admindb,$conn,$JobID,$ContactNumber){
        $sql="update JobDetail set ContactNumber='$ContactNumber' where JobID='$JobID'";
        $rst = $admindb->ExecSQL($sql,$conn);
        return $rst;
    }

    public function jobDetailUpdate($JobID) {
        $sql="update JobDetail set NeedSex='$this->NeedSex', NeedQty='$this->NeedQty',AvailQty='$this->AvailQty',GatherTime='$this->GatherTime',DisbandTime='$this->DisbandTime',GatherLoc='$this->GatherLoc',Description='$this->Description',HasInterView='$this->HasInterView',HasEatting='$this->HasEatting',HasSleepping='$this->HasSleepping',Task='$this->Task',Others='$this->Others',ModifyTime='$this->ModifyTime' where JobID='$JobID'";
        return $sql;
    }
}

