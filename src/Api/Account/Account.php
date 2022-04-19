<?php

namespace Golliaphuth\Bybit\Api\Account;

use Golliaphuth\Bybit\Api\Request;

class Account extends Request
{
    public function getBalance()
    {
        $this->method = 'GET';
        $this->endpoint = '/spot/v1/account';
        return $this->exec();
    }

    public function internalTransfer($options)
    {
        $this->method = 'POST';
        $this->endpoint = '/asset/v1/private/transfer';
        $this->options = $options;
        return $this->exec();
    }

    public function subAccountTransfer($options)
    {
        $this->method = 'POST';
        $this->endpoint = '/asset/v1/private/sub-member/transfer';
        $this->options = $options;
        return $this->exec();
    }

    public function getInternalTransferList($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/asset/v1/private/transfer/list';
        $this->options = $options;
        return $this->exec();
    }

    public function getSubAccountTransferList($options)
    {
        $this->method = 'GET';
        $this->endpoint = '/asset/v1/private/sub-member/transfer/list';
        $this->options = $options;
        return $this->exec();
    }

    public function getSubAccounts()
    {
        $this->method = 'GET';
        $this->endpoint = '/asset/v1/private/sub-member/member-ids';
        return $this->exec();
    }
}
