
<?php
class M_productos extends CI_Model{
    //usuarios
    public function agregar_usuario($data_insertar){
        $this->db->from('usuario');
        $this->db->insert('usuario',$data_insertar);
        return $this->db->insert_id();
    }
    public function obtener_usuario($user){
        $this->db->select('usuario,password,matricula');
        $this->db->where('usuario',$user);
        $query=$this->db->get('usuario');
        return $query->result();
    }
    public function usuario_by_id($id){
        $this->db->select('usuario,pass,nivel');
        $this->db->where('id',$id);
        $query=$this->db->get('usuario');
        return $query->result();
    }
    public function reactivar_usuarios($id){
        $data['status']=1;
        $this->db->where('id', $id);
        $hecho = $this->db->update('usuario',$data);
    }

    public function ver_usuarios(){

        $query=$this->db->where('status',1);
        
        $query=$this->db->get('usuario');
        return $query->result();

    }
    public function editar_usuarios(){
        $id_editar=$this->input->post('id');
        $this->db->where('id',$id_editar);
        $this->db->update('usuario',$this->input->post());
    }
    public function eliminar_usuarios($id){
       
        $data['status']=0;
        $this->db->where('id', $id);
        $hecho = $this->db->update('usuario',$data);
    }
    public function ver_usuarios_eliminados(){
        $query=$this->db->where('status',0);

        $query=$this->db->get('usuario');
        return $query->result();
    }
}
