<?php

namespace JQueryUI\View\Helper;

use Cake\Core\Configure;
use Cake\View\Helper;

/**
 * @property \Cake\View\Helper\HtmlHelper $Html
 */
class JQueryUIHelper extends Helper {

    /**
     * @var array
     */
    protected $_defaultConfig = [
        'css' => [
            [
                'url' => 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css',
                'integrity' => 'sha256-rByPlHULObEjJ6XQxW/flG2r+22R5dKiAoef+aXWfik=',
            ],
            [
                'url' => 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.min.css',
                'integrity' => 'sha256-AjyoyaRtnGVTywKH/Isxxu5PXI0s4CcE0BzPAX83Ppc=',
            ],
        ],
        'script' => [
            'url' => 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js',
            'integrity' => 'sha256-KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM=',
        ],
    ];

    /**
     * @var array
     */
    public $helpers = ['Html'];

    /**
     * @param array $options
     * @return string|null
     */
    public function css(array $options = []) {
        if (!isset($options['block'])) {
            $options['block'] = false;
        }
        $options['once'] = true;
        if (Configure::read('debug')) {
            return $this->Html->css([
                        'JQueryUI.jquery-ui.min',
                        'JQueryUI.jquery-ui.theme.min',
                            ], $options);
        } else {
            $out = '';
            foreach ($this->getConfig('css') as $css) {
                $options['integrity'] = $css['integrity'];
                $options['crossorigin'] = 'anonymous';
                $out .= $this->Html->css($css['url'], $options);
            }
            return $out;
        }
    }

    /**
     * @param array $options
     * @return string|null
     */
    public function script(array $options = []) {
        if (!isset($options['block'])) {
            $options['block'] = false;
        }
        $options['once'] = true;
        if (Configure::read('debug')) {
            return $this->Html->script('JQueryUI.jquery-ui.min', $options);
        } else {
            $options['integrity'] = $this->getConfig('script.integrity');
            $options['crossorigin'] = 'anonymous';
            return $this->Html->script($this->getConfig('script.url'), $options);
        }
    }

}
