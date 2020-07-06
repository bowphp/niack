<?php

namespace Bow\Niack\Exceptions;

use Bow\Niack\Exceptions\UserRoleAlreadyAttach;
use Bow\Database\Exception\NotFoundException;
use Exception;

class ErrorHandle
{
    /**
     * handle the error
     *
     * @param Exception $exception
     * @return void
     */
    public function handle($exception)
    {
        if ($exception instanceof NotFoundException) {
            return $this->render('errors.404', ['code' => 404]);
        }

        if ($exception instanceof UserRoleAlreadyAttach) {
            // Do Somethink
        }
    }

    /**
     * Render view as response
     *
     * @param string $view
     * @param array $data
     * @return mixed
     */
    private function render($view, $data = [], $code = 200)
    {
        if (is_numeric($data)) {
            $code = $data;
            $data = [];
        }

        $content = view($view, $data, $code)->getContent();

        $this->send($content);
    }

    /**
     * Send the json as response
     *
     * @param string $data
     * @param array $code
     * @return mixed
     */
    private function json($exception)
    {
        $data = [
            'status' => [
                'message' => $exception->getMessage(),
                'success' => false
            ], 'data' => $exception->getTrace()
        ];

        $content = json($data, $exception->getCode());

        $this->send($content);
    }

    /**
     * Die the process with content
     *
     * @param string $content
     * @return mixed
     */
    private function send($content)
    {
        die($content);
    }
}
