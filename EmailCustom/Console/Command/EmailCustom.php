<?php
declare(strict_types=1);

namespace Figueiredo\EmailCustom\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Magento\Framework\Mail\Template\TransportBuilder;
use Magento\Framework\App\Area;
use Magento\Framework\App\Config\ScopeConfigInterface;


class EmailCustom extends Command
{
    protected TransportBuilder $transportBuilder;
    protected ScopeConfigInterface $scopeConfig;

    public function __construct(
        TransportBuilder $transportBuilder,
        ScopeConfigInterface $scopeConfig,
        string $name = null
    ) {
        $this->transportBuilder = $transportBuilder;
        parent::__construct($name);
    }

    protected function configure()
    {
        parent::configure();
        $this->setName('figueiredo:email:custom');
        $this->setDescription('Email Custom');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $templateOptions = [
            'area' => Area::AREA_FRONTEND,
            'store' => 1
        ];
        $templateVars = [
            'customer_name' => 'William Figueiredo',
            'customer_email' => 'william.figueiredo@compasso.com.br'
        ];

        $templateId = $this->scopeConfig->getValue();


        $transport = $this->transportBuilder
            ->setTemplateIdentifier('email_custom_email_custom_email_template')
            ->setTemplateOptions($templateOptions)
            ->setTemplateVars($templateVars)
            ;

        $output->writeln('ok');

    }
}
