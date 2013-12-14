<?php
/**
 * Usergroup Model
 *
 * @author Carl-Johan
 */
class Usergroup extends ActiveRecord\Model {
    
    /**
     * Check if this usergroup or any of it's children has a permission
     * @param string $usergroup The usergroup permission to be granted
     * @return boolean true if permission is granted otherwise false
     */
    public function permission($usergroup) {
        
        //Check if this Usergroup has the permission
        if($this->name == $usergroup) return true;
        
        //If it doesn't have any child return false
        if($this->child_id == null) return false;
        $child = $this->child;
        if($child == null) return false;
        
        //Else check the childs permission
        return $child->permission($usergroup);
    }
    
    public function get_child() {
        try {
            $child = UserGroup::find($this->child_id);
            return $child;
        } catch (Exception $e) {return null;}
    
    }
    
}

?>
