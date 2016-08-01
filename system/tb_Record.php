<?php
class tb_Record{
    var $ID="";
    var $ApplyID="";
    var $WorkDate="";
    var $WorkHour="";
    /**
     * @return the $ID
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @return the $ApplyID
     */
    public function getApplyID()
    {
        return $this->ApplyID;
    }

    /**
     * @return the $WorkDate
     */
    public function getWorkDate()
    {
        return $this->WorkDate;
    }

    /**
     * @return the $WorkHour
     */
    public function getWorkHour()
    {
        return $this->WorkHour;
    }

    /**
     * @param string $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @param string $ApplyID
     */
    public function setApplyID($ApplyID)
    {
        $this->ApplyID = $ApplyID;
    }

    /**
     * @param string $WorkDate
     */
    public function setWorkDate($WorkDate)
    {
        $this->WorkDate = $WorkDate;
    }

    /**
     * @param string $WorkHour
     */
    public function setWorkHour($WorkHour)
    {
        $this->WorkHour = $WorkHour;
    }

    public function recordSelect($admindb,$conn,$UserID,$JobID){
        $sql="select * from Apply where JobID=$JobID and UserID=$UserID ";
        $rst = $admindb->ExecSQL($sql,$conn);   //运行sql
        $ApplyID=$rst[0]['ID'];
        $sql="select * from Record where ApplyID=$ApplyID ORDER BY WorkDate";
        $rst = $admindb->ExecSQL($sql,$conn);   //运行sql
        return $rst;
    }


    public function recordInsert($admindb,$conn,$UserID,$JobID,$WorkDate,$WorkHour) {
        $sql="select * from Apply where JobID=$JobID and UserID=$UserID ";
        $rst = $admindb->ExecSQL($sql,$conn);   //运行sql
        $ApplyID=$rst[0]['ID'];
        $sql="insert into Apply(ApplyID,WorkDate,WorkHour)";
        $sql.="values ('".$ApplyID."','".$WorkDate."','".$WorkHour."')";
        $rst = $admindb->ExecSQL($sql,$conn);   //运行sql
        return $rst;
    }

}