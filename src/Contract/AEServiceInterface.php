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
     * @param string $backUrl
     * @param string $oddType
     * @return mixed
     */
    function gameLaunch(string $opCode, string $account, string $gameCode, string $language, string $backUrl = null, string $oddType = null);

    /**
     * 遊戲詳情
     * @param string $opCode
     * @param string $account
     * @param string $betId
     * @param string $language
     * @return mixed
     */
    function gameDetail(string $opCode, string $account, string $betId, string $language = 'en');
}

