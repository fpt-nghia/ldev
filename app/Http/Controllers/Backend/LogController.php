<?php
namespace App\Http\Controllers\Backend;

use File;
use Request;
use Response;
use App\Lib\Log\Log;

class LogController extends Controller
{
    /**
     * @var Log
     */
    private $log;

    public function __construct()
    {
        $this->log = new Log();
    }

    public function index()
    {
        if (Request::input('l')) {
            $this->log->setFile(base64_decode(Request::input('l')));
        } elseif (Request::input('dl')) {
            return Response::download($this->getFullPath(Request::input('dl')));
        } elseif (Request::has('del')) {
            File::delete($this->getFullPath(Request::input('del')));
            return redirect(Request::url());
        }

        return view('backend.log.index', [
            'logs'          => $this->log->all(),
            'files'         => $this->log->getFiles(),
            'currentFile'   => $this->log->getFile()
        ]);
    }

    /**
     * @param string $fileName
     */
    private function getFullPath($fileName)
    {
        return $this->log->getLogPath() . base64_decode($fileName);
    }
}