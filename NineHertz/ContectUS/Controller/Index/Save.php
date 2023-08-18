<?php

namespace NineHertz\ContectUS\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use NineHertz\ContectUS\Model\NineHertzDataFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;

class Save extends Action
{
    protected $resultPageFactory;
    protected $nineHertzData;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        NineHertzDataFactory $nineHertzData
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->ninehertzData = $nineHertzData;
        parent::__construct($context);
    }

    public function execute()
    {
        try {
            $data = (array)$this->getRequest()->getPost();
     // dd($data);
            if ($data) {
                $model = $this->ninehertzData->create();
                $model->setData($data)->save();
                $this->messageManager->addSuccessMessage(__("Data Saved Successfully."));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e, __("We can\'t submit your request, Please try again."));
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;

    }
}