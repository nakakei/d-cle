<?php
App::uses('AppHelper', 'View/Helper');

class TreeHelper extends AppHelper {
	
	public $helpers =array('Html');
    
    function getCategories($key, $categories, &$mainList) {
        
        //一番最初のul
        if($key == 0){
            $result = '<ul style="padding-left:20px">';     
        } else {
            $result = '<ul style="padding-left:20px">';     
        }
        
        foreach($categories as $catKey => $name) {
            $result .= $this->getCategory($catKey, $name, $mainList);
        }
        $result .= '</ul>';
        return $result;
    }
    
    function getCategory($key, $value, &$mainList) {
        $result = '<li>';
        
        if(array_key_exists($key, $mainList)) {
            //子カテゴリを持つカテゴリ
            $result .= $this->Html->link($value, array('controller'=>'home','action' => 'category',$key));
        } else {
            //子無しカテゴリ
            $result .= $this->Html->link($value, array('controller'=>'home','action' => 'category',$key));
        }
    
        
        if(array_key_exists($key, $mainList)) {
            $result .= $this->getCategories($key, $mainList[$key], $mainList);
        }
        $result .= '</li>';
        return $result;
    }    
}
?> 