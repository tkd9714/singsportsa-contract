<?php
declare(strict_types=1);
namespace GiocoPlus\SINGSPORTSA\Contract;
/**
 *
 */
interface SINGSPORTSAServiceInterface {

    /**
     * 遊戲啟動
     *
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @param string $back_url
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language, string $back_url = null);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $account
     * @param string $bet_id
     * @return mixed
     */
    function gameDetail(string $op_code, string $account, string $bet_id);

    /**
     * 抓取遊戲紀錄
     *
     * @param string $op_code
     * @param integer $past_minutes
     * @param string $cache_key
     * @return mixed
     */
    function betLogGrabber(string $op_code, int $past_minutes, string $cache_key);

    /**
     * 全營商 抓取遊戲紀錄
     *
     * @param integer $past_minutes
     * @return mixed
     */
    function betLogGrabberAll(int $past_minutes);

    /**
     * 遊戲上分
     *
     * @param string $op_code
     * @param string $account
     * @return mixed
     */
    function gameTransferIn(string $op_code, string $account);

    /**
     * 遊戲下分
     *
     * @param string $op_code
     * @param string $account
     * @param float $amount
     * @return mixed
     */
    function gameTransferOut(string $op_code, string $account, float $amount);

    /**
     * 取得錢包餘額
     *
     * @param string $op_code
     * @param string $account
     * @return mixed
     */
    function getBalance(string $op_code, string $account);

    /**
     * 上/下分失敗 訂單檢核
     *
     * @param string $op_code
     * @param string $order_no
     * @return mixed
     */
    function orderFailCheck(string $op_code, string $order_no);

    /**
     * 會員帳號轉換(GF -> SINGSPORTSA)
     * @param string $op_code
     * @param array $vendor
     * @param string $member_code
     * @return mixed
     */
    function accountToVendor(string $op_code, array $vendor, string $member_code);

    /**
     * 會員帳號轉換(SINGSPORTSA -> GF)
     * @param string $op_code
     * @param array $vendor
     * @param string $vendor_account
     * @return mixed
     */
    function accountToOperator(string $op_code, array $vendor, string $vendor_account);
}

