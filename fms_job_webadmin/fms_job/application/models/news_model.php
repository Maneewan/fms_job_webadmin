<?php
class News_Model extends CI_Model 
{
    function __construct()
{
    parent :: __construct(); 

    $this->load->database();
}
    function addNews($news_topic,$news_date_update,$news_detail,$url)
    {
        $this->db->set('news_topic', $news_topic);
        $this->db->set('news_date_update',$news_date_update);        
        $this->db->set('news_detail', $news_detail);
        $this->db->set('news_image', $url);
        $this->db->insert('tb_news');
    }
    function getNews()
    {
        $query = $this->db->get('tb_news');
        return $query->result_array();
    }    
    
    function getNewsIDModel($id_news)
    {        
                $query = $this->db->select('*')
                ->where('id_news', $id_news)
                ->get('tb_news');
                return $query->result();
    }
    function updateNewsModel($id_news,$news_topic,$news_detail,$news_date_update,$url)
    {
        $this->db->set('news_topic', $news_topic);
        $this->db->set('news_detail', $news_detail);
        $this->db->set('news_date_update', $news_date_update);
        if($url!='')$this->db->set('news_image', $url);
        
        $this->db->where('id_news', $id_news);
        if($this->db->update('tb_news', $data)){ 
            redirect('news_controller/list_news');
        }else{
            redirect('news_controller/updatenews','refresh');
        }
    }
    
    function delNewsModel($id_news)
    {
        $this->db->where('id_news', $id_news);
        if($this->db->delete('tb_news'))
        {
            redirect('news_controller/list_news');
        }
    }
}