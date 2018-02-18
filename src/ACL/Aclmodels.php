<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter ACL Class
 *
 * This class enables apply permissions to controllers, controller and models, as well as more fine tuned permissions '
 * at code level.
 *
 * @package     CodeIgniter
 * @subpackage  Models
 * @category    Models
 * @author      Kamil Karpiński
 * @link        https://github.com/MrChudy923/SOSWInformatyka-CMS
 */

namespace Acl;
use Acl\Initializer;

class Aclmodels {

    protected $CI;
    protected $kamil;
    /**
     * ACLModel constructor.
     */
    public function __construct()
    {
        $this->CI = &get_instance;
    }

    public function kamil()
    {
        $this->kamil = 'Kamil';
        return $this->kamil;
    }
}