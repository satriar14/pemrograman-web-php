<?php
require_once './class_account.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::withdraw($uangTranfer, false);
        $destination->deposit($uangTranfer, false);

        echo "Transfer sejumlah " .  number_format($uangTranfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}

$satria = new AccountBank('1010', 'satria', 500000);
$ijah = new AccountBank('1011', 'ijah', 0);
$budi = new AccountBank('1012', 'budi', 0);

$satria->deposit(1000000);
$satria->cetak();

$satria->doTransfer($ijah, 1000000);
$satria->cetak();

$satria->doTransfer($budi, 500000);
$satria->cetak();

$ijah->cetak();
$budi->cetak();