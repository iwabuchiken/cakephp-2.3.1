<?php
class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    // REF http://www.tutorialspoint.com/php/php_files.htm
//     public function write_log() {
    private function _write_log($text, $file_name, $line_number) {
//     public function _write_log() {
    	
    	//REF http://www.artsnet.jp/archives/328
    	//REF http://d.hatena.ne.jp/gapao/20090510/1242025196
    	//REF http://cutfromthenorth.com/save-page-output-as-html-with-cakephp/
    	$fname = "C:/WORKS/WS/Cake/cakephp-2.3.1/app/log.txt";
//     	$fname = "/log.txt";
    	
    	$file = new File($fname);
    	
    	$file->create();
    	
//     	$file->write("abcde\n", "a");
    	$file->write("[$file_name:$line_number] $text\n\n", "a");
//     	$file->write("abcde ".time()."\n", "a");
    	
    	$file->close();
    	
//     	$file.write("abcde", "w");
    	
//     	$file.close();
    	
//     	$file = fopen($fname, "w");
    	
//     	if( $file == false )
//     	{
//     		echo ( "Error in opening file" );
//     		exit();
//     	}
    	
//     	fwrite($file, "abcde\n");
    	
//     	fclose($file);
    	
    }//public function _write_log() {
    
    public function index() {
    	
        $this->set('posts', $this->Post->find('all'));
        
//         write_log();
		// REF $this-> http://stackoverflow.com/questions/3488444/cakephp-fatal-error-call-to-undefined-function answered Aug 15 '10 at 17:30
//         $this->_write_log();
//         App::import('lib', 'hoge');
        
//         _write_log();
        
			
    }
    
    public function view($id = null) {
    	if (!$id) {
    		throw new NotFoundException(__('Invalid post'));
    	}
    
    	$post = $this->Post->findById($id);
    	if (!$post) {
    		throw new NotFoundException(__('Invalid post'));
    	}
    	$this->set('post', $post);
    }//public function view($id = null)
    
    public function add() {
    	if ($this->request->is('post')) {
    		$this->Post->create();
    		if ($this->Post->save($this->request->data)) {
    			//debug
    			// REF array size http://idea-tech.sakura.ne.jp/blog/2007/05/post_24.php
//     			$this->_write_log(count($this->request->data), __FILE__, __LINE__);
				// REF basename http://php.net/manual/ja/function.basename.php
    			$this->_write_log(
    					"count(\$this->request->data)=".count($this->request->data),
    					basename(__FILE__), __LINE__);	//=> 1
    			$this->_write_log(
    					get_class($this->request->data[0]),
    					basename(__FILE__), __LINE__);	//=> PostsController
    			
    			
    			$this->Session->setFlash('Your post has been saved.');
    			$this->redirect(array('action' => 'index'));
    			
    		} else {
    			$this->Session->setFlash('Unable to add your post.');
    		}
    	}//if ($this->request->is('post')) {
    	
    }//public function add() {
    
    
}//class PostsController extends AppController