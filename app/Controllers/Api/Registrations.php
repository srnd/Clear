<?php
namespace CodeDay\Clear\Controllers\Api;

use \CodeDay\Clear\Models;
use \CodeDay\Clear\ModelContracts;

class Registrations extends ApiController {
  public function getRegistration()
  {
    $this->requirePermission(['admin']);
    return json_encode(ModelContracts\Registration::Model(\Route::input('registration'), $this->permissions));
  }
}
