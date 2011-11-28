<?php
    /**
     *  Script super sederhana buat generate model di CodeIgniter dari database
     */
	$host = "localhost";
	$port = 3306;
	$user = "root";
	$pass = "root";
  $db_name = "lab";

    $conn = mysql_connect($host, $user, $pass);
    mysql_select_db($db_name);

    $sql = "select table_name from information_schema.tables where table_schema='$db_name'";
    $result = mysql_query($sql);

    while(($row = mysql_fetch_assoc($result)))
    {
        $tb_name = $row['table_name'];
        $sql = "select column_name, column_key, extra from information_schema.columns where table_schema='$db_name' and table_name='$tb_name'";
        $result_column = mysql_query($sql);

        $ftable = fopen(strtolower($tb_name) . "_model.php", "w");
        $str = "<?php\n";
        $str .= "class " . ucfirst($tb_name) . "_model extends CI_Model {\n\n\t";
        # $str .= "function " . ucfirst($tb_name) . "_model()\n\t{\n\t\t";
        # $str .= "parent::Model();\n\t\t\$this->load->database();\n\t}\n\n\t";
        fwrite($ftable, $str);

        $str_create = "function save(\$data) {\n\t\t";
        $str_update = "function update(\$id, \$data) {\n\t\t";
        $str_read = "function find(\$id) {\n\t\t";
        $str_readAll = "function findAll() {\n\t\t";
        $str_delete = "function destroy(\$id) {\n\t\t";
        
        while($row_column = mysql_fetch_assoc($result_column))
        {
            if($row_column["extra"] != "auto_increment")
            {
                $str_create .= "\$this->db->set('" . $row_column['column_name'] . "', \$data['" . $row_column['column_name'] . "']);\n\t\t";
            }
            if($row_column["column_key"] != "PRI")
            {
                $str_update .= "\$this->db->set('" . $row_column['column_name'] . "', \$data['" . $row_column['column_name'] . "']);\n\t\t";
            }
            else
            {
                $str_update .= "\$this->db->where('" . $row_column['column_name'] . "', \$data['" . $row_column['column_name'] . "']);\n\t\t";
                $str_read .= "\$this->db->where('" . $row_column['column_name'] . "', \$id);\n\t\t";
                $str_delete .= "\$this->db->where('" . $row_column['column_name'] . "', \$id);\n\t\t";
            }
        }

        $str_create .= "\$this->db->insert('" . strtolower($tb_name) . "');\n\n\t\t";
        $str_create .= "return \$this->db->affected_rows();\n\t}\n\n\t";
        $str_update .= "\$this->db->update('" . strtolower($tb_name) . "');\n\n\t\t";
        $str_update .= "return \$this->db->affected_rows();\n\t}\n\n\t";
        $str_delete .= "\$this->db->delete('" . strtolower($tb_name) . "');\n\n\t\t";
        $str_delete .= "return \$this->db->affected_rows();\n\t}\n\n";
        $str_read .= "\$query = \$this->db->get('" . strtolower($tb_name) . "');\n\n\t\t";
        $str_read .= "return \$query;\n\t}\n\n\t";
        $str_readAll .= "\$query = \$this->db->get('" . strtolower($tb_name) . "');\n\n\t\t";
        $str_readAll .= "return \$query;\n\t}\n\n\t";

        fwrite($ftable, $str_create);
        fwrite($ftable, $str_read);
        fwrite($ftable, $str_readAll);
        fwrite($ftable, $str_update);
        fwrite($ftable, $str_delete);
        fwrite($ftable, "}");

        fclose($ftable);
    }
?>

