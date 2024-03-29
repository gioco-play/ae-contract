<?php
declare(strict_types=1);
namespace GiocoPlus\AE\Contract;
/**
 *
 */
interface AEServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $opCode
     * @param string $account
     * @param string $gameCode
     * @param string $language
     * @param string $vendorCode
     * @param string $backUrl
     * @param string $oddType
     * @return mixed
     */
    function gameLaunch(string $opCode, string $account, string $gameCode, string $language, string $vendorCode, string $backUrl = null, string $oddType = null);

    /**
     * 遊戲詳情
     * @param string $opCode
     * @param string $account
     * @param string $betId
     * @param string $vendorCode
     * @param string $language
     * @return mixed
     */
    function gameDetail(string $opCode, string $account, string $betId, string $vendorCode, string $language = 'en');

    /**
     * 營商帳號轉換為遊戲商帳號
     * @param string $opCode
     * @param array $vendor
     * @param string $memberCode
     * @return mixed
     */
    function accountToVendor(string $opCode, array $vendor, string $memberCode);

    /**
     * 遊戲商帳號轉換為營商帳號
     * @param string $opCode
     * @param array $vendor
     * @param string $vendorAccount
     * @return mixed
     */
    function accountToOperator(string $opCode, array $vendor, string $vendorAccount);
}

