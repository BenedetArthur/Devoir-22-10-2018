<?php
class Model_AjoutConf extends CI_Model
{
    public function GetAllConference()
    {
        $sql = $this->db->query('SELECT conference.IDCONFERENCE, niveau.NIVEAU, theme.LIBELLETHEME, niveau.IDNIVEAU, theme.IDTHEME, technologie.IDTECHNO, technologie.NOMTECHNO
        FROM conference, niveau, theme, utiliser, technologie
        WHERE conference.IDTHEME=theme.IDTHEME 
        AND conference.IDNIVEAU=niveau.IDNIVEAU
        AND conference.IDCONFERENCE = utiliser.IDCONFERENCE
        AND utiliser.IDTECHNO = technologie.IDTECHNO');
        return $sql->result();
    }
}
?>