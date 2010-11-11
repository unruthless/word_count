<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine Word Count Accessory
 *
 * @package     ExpressionEngine
 * @subpackage  Control Panel
 * @category    Accessories
 * 
 * @author      Greg Aker, http://gregaker.net/
 * @contributor Ruthie BenDor, http://unruthless.com/
 */

class Word_count_acc {

  public $name        = 'Word Count';
  public $id          = 'word_count';
  public $version     = '1.0';
  public $description = 'Counts words';
  public $sections    = array();

  public function set_sections()
  {
    $this->sections['Word Count'] = $this->_wc();
  }

  private function _wc()
  {
    return get_instance()->load->view('count_words', '', TRUE);
  }

}