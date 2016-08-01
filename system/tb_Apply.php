<?php
class tb_Apply{
    var $ID="";
    var $JobID="";
    var $UserID="";
    var $StatusID=0;
    var $CreateTime="";
    var $FinishTime="";
    var $AssessToType="";
    var $AssessTo="";
    var $AssessFromType="";
    var $AssessFrom="";
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
     * @return the $UserID
     */
    public function getUserID()
    {
        return $this->UserID;
    }

    /**
     * @return the $StatusID
     */
    public function getStatusID()
    {
        return $this->StatusID;
    }

    /**
     * @return the $CreateTime
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     * @return the $FinishTime
     */
    public function getFinishTime()
    {
        return $this->FinishTime;
    }

    /**
     * @return the $AssessToType
     */
    public function getAssessToType()
    {
        return $this->AssessToType;
    }

    /**
     * @return the $AssessTo
     */
    public function getAssessTo()
    {
        return $this->AssessTo;
    }

    /**
     * @return the $AssessFromType
     */
    public function getAssessFromType()
    {
        return $this->AssessFromType;
    }

    /**
     * @return the $AssessFrom
     */
    public function getAssessFrom()
    {
        return $this->AssessFrom;
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
     * @param string $UserID
     */
    public function setUserID($UserID)
    {
        $this->UserID = $UserID;
    }

    /**
     * @param string $StatusID
     */
    public function setStatusID($StatusID)
    {
        $this->StatusID = $StatusID;
    }

    /**
     * @param string $CreateTime
     */
    public function setCreateTime($CreateTime)
    {
        $this->CreateTime = $CreateTime;
    }

    /**
     * @param string $FinishTime
     */
    public function setFinishTime($FinishTime)
    {
        $this->FinishTime = $FinishTime;
    }

    /**
     * @param string $AssessToType
     */
    public function setAssessToType($AssessToType)
    {
        $this->AssessToType = $AssessToType;
    }

    /**
     * @param string $AssessTo
     */
    public function setAssessTo($AssessTo)
    {
        $this->AssessTo = $AssessTo;
    }

    /**
     * @param string $AssessFromType
     */
    public function setAssessFromType($AssessFromType)
    {
        $this->AssessFromType = $AssessFromType;
    }

    /**
     * @param string $AssessFrom
     */
    public function setAssessFrom($AssessFrom)
    {
        $this->AssessFrom = $AssessFrom;
    }

    public function applySelect($startCount=0,$perNumber=1000,$SearchTimeType=1){
        $sql='select Apply.*,Job.*,User.Phone,UserDetail.* from Apply,User,UserDetail,Job where Job.ID=Apply.JobID  and Apply.UserID=User.ID and UserDetail.UserID=User.ID ';
        if(1==$SearchTimeType){             //表示Job未开始 返回所有

        }else if(2==$SearchTimeType){          //表示Job正在进行  返回被录用的
            $sql.=" and Apply.StatusID=1";
        }else if(3==$SearchTimeType){           //表示Job已经结束  返回被录用和已经完成的
            $sql.=" and Apply.StatusID in (1,3)";
        }

        if($this->JobID!=''){
            $sql.=" and Apply.JobID=$this->JobID ";
        }
        if($this->UserID!=''){
            $sql.=" and Apply.UserID=$this->UserID";
        }
        $sql.=" limit $startCount,$perNumber ";
        return $sql;
    }
    public function applySelectCount($admindb,$conn,$SearchTimeType=1){
        $sql='select COUNT(*) as number from Apply,User,UserDetail where Apply.UserID=User.ID and UserDetail.UserID=User.ID ';

        if(1==$SearchTimeType){             //表示Job未开始 返回所有

        }else if(2==$SearchTimeType){          //表示Job正在进行  返回被录用的
            $sql.=" and Apply.StatusID=1";
        }else if(3==$SearchTimeType){           //表示Job已经结束  返回被录用和已经完成的
            $sql.=" and Apply.StatusID in (1,3)";
        }

        if($this->JobID!=''){
            $sql.=" and Apply.JobID=$this->JobID ";
        }
        if($this->UserID!=''){
            $sql.=" and Apply.UserID=$this->UserID";
        }
        $rst = $admindb->ExecSQL($sql,$conn);
        $number=$rst['0']['number'];
        return $number;
    }

    public function userApplyCount($admindb,$conn,$JobID='',$UserID='',$StatusID='0'){
        $sql="select COUNT(*) as number from Apply where Apply.StatusID=$StatusID";
        if($JobID!=''){
            $sql.=" and Apply.JobID=$JobID";
        }
        if($UserID!=''){
            $sql.=" and Apply.UserID=$UserID";
        }

        $rst = $admindb->ExecSQL($sql,$conn);
        $number=$rst['0']['number'];
        return $number;
    }

    public function userApplySearch($admindb,$conn,$JobID='',$UserID='',$StatusID='0'){         //主要用来搜索工作信息
        $sql="select Job.*  from Apply,Job where Apply.JobID=Job.ID and  Apply.StatusID=$StatusID";
        if($JobID!=''){
            $sql.=" and Apply.JobID=$JobID";
        }
        if($UserID!=''){
            $sql.=" and Apply.UserID=$UserID";
        }

        $rst = $admindb->ExecSQL($sql,$conn);
        return $rst;
    }

    public function userApplyInsert($admindb,$conn) {                   //报名
        $sql="insert into Apply(JobID,UserID,StatusID,CreateTime,FinishTime,AssessToType,AssessTo,AssessFromType,AssessFrom)";
        $sql.=" values ('".$this->JobID."','".$this->UserID."',0,'".$this->CreateTime."','".$this->FinishTime."','".$this->AssessToType."','".$this->AssessTo."','".$this->AssessFromType."','".$this->AssessFrom."')";
        $rst = $admindb->ExecSQL($sql,$conn) or  die('Execution error');
        if($rst==false){
            return false;
        }
        $sql="select count(*) as number from Apply where JobID=$this->JobID and StatusID in (0,1)";
        $rst = $admindb->ExecSQL($sql,$conn);
        $number=$rst[0]['number'];
        $sql="Update JobDetail set AvailQty=$number where JobID=$this->JobID";
        $rst = $admindb->ExecSQL($sql,$conn);
        return $rst;
    }

    public function employApplyUpdate($admindb,$conn){                      //录用
        $sql="Update Apply set StatusID=1 where JobID=$this->JobID and UserID=$this->UserID";
        $rst = $admindb->ExecSQL($sql,$conn) or  die('Execution error');
        return $rst;
    }

    public function deteleApplyUpdate($admindb,$conn){                             //爽约
        $sql="Update Apply set StatusID=2 where JobID=$this->JobID and UserID=$this->UserID";
        $rst = $admindb->ExecSQL($sql,$conn) or  die('Execution error');
        if($rst==false){
            return false;
        }
        $sql="select count(*) as number from Apply where JobID=$this->JobID and StatusID=1";
        $rst = $admindb->ExecSQL($sql,$conn);
        $number=$rst[0]['number'];
        $sql="Update JobDetail set AvailQty=$number where JobID=$this->JobID";
        $rst = $admindb->ExecSQL($sql,$conn);
        return $rst;
    }
    public function finishApplyUpdate($admindb,$conn){                      //完成
        $sql="Update Apply set StatusID=3 where JobID=$this->JobID and UserID=$this->UserID";
        $rst = $admindb->ExecSQL($sql,$conn) or  die('Execution error');
        if($rst==false){
            return false;
        }

        return $rst;
    }

    public function applyDelete($admindb,$conn){                                        //取消报名
        $sql="delete from Apply where JobID=$this->JobID and UserID=$this->UserID";
        $rst = $admindb->ExecSQL($sql,$conn) or  die('Execution error');
        if($rst==false){
            return false;
        }
        $sql="select count(*) as number from Apply where JobID=$this->JobID and StatusID in (0,1)";
        $rst = $admindb->ExecSQL($sql,$conn);
        $number=$rst[0]['number'];
        $sql="Update JobDetail set AvailQty=$number where JobID=$this->JobID";
        $rst = $admindb->ExecSQL($sql,$conn);
        return $rst;
    }

    public function applyAssessFromInsert($admindb,$conn,$JobID,$UserID,$FinishTime,$AssessFromType,$AssessFrom){
        $sql="update Apply set StatusID=3,FinishTime='$FinishTime',AssessFromType='$AssessFromType',AssessFrom='$AssessFrom' where JobID=$JobID and UserID=$UserID";
        $rst = $admindb->ExecSQL($sql,$conn);
        return $rst;
    }
    public function applyAssessToInsert($admindb,$conn,$JobID,$UserID,$AssessToType,$AssessTo){
        $sql="update Apply set AssessToType='$AssessToType',AssessTo='$AssessTo' where JobID='$JobID' and UserID='$UserID' and StatusID='3'";
        $rst = $admindb->ExecSQL($sql,$conn);
        return $rst;
    }


}