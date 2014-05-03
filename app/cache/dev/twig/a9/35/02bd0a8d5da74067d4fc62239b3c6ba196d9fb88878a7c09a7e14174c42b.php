<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_a93502bd0a8d5da74067d4fc62239b3c6ba196d9fb88878a7c09a7e14174c42b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a>";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  68 => 30,  54 => 26,  50 => 25,  33 => 16,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  793 => 182,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  678 => 133,  666 => 126,  662 => 125,  654 => 123,  643 => 120,  640 => 119,  617 => 112,  614 => 111,  576 => 101,  564 => 99,  555 => 95,  547 => 93,  527 => 91,  515 => 85,  512 => 84,  503 => 81,  496 => 79,  493 => 78,  490 => 77,  480 => 75,  464 => 71,  461 => 70,  459 => 69,  456 => 68,  450 => 64,  433 => 60,  428 => 59,  426 => 58,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  385 => 41,  377 => 37,  368 => 34,  366 => 33,  363 => 32,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  288 => 4,  285 => 3,  276 => 395,  273 => 394,  271 => 374,  268 => 373,  263 => 365,  253 => 342,  248 => 336,  245 => 335,  243 => 327,  230 => 303,  227 => 301,  225 => 298,  222 => 297,  217 => 289,  215 => 280,  212 => 279,  210 => 270,  207 => 269,  202 => 266,  199 => 265,  197 => 249,  194 => 248,  191 => 246,  179 => 224,  176 => 223,  171 => 216,  169 => 210,  166 => 209,  164 => 203,  161 => 202,  156 => 195,  149 => 182,  144 => 176,  141 => 175,  139 => 169,  134 => 161,  129 => 148,  126 => 147,  124 => 132,  121 => 131,  114 => 111,  111 => 110,  109 => 105,  106 => 104,  104 => 90,  101 => 89,  94 => 57,  91 => 56,  89 => 47,  86 => 46,  84 => 41,  90 => 27,  66 => 12,  63 => 22,  35 => 22,  27 => 14,  25 => 12,  77 => 25,  65 => 29,  62 => 28,  59 => 27,  40 => 20,  28 => 17,  81 => 40,  73 => 24,  67 => 19,  56 => 26,  48 => 25,  38 => 18,  36 => 20,  32 => 21,  30 => 17,  24 => 13,  21 => 2,  34 => 18,  31 => 5,  29 => 15,  26 => 3,  22 => 12,  19 => 11,  857 => 210,  854 => 273,  849 => 206,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 183,  794 => 248,  791 => 247,  785 => 178,  783 => 177,  780 => 176,  774 => 241,  772 => 172,  769 => 171,  766 => 238,  762 => 221,  757 => 218,  751 => 163,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  704 => 203,  701 => 202,  698 => 201,  680 => 134,  677 => 199,  675 => 132,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 124,  655 => 189,  651 => 280,  649 => 122,  644 => 270,  642 => 238,  638 => 118,  635 => 117,  629 => 233,  626 => 232,  624 => 231,  619 => 113,  613 => 225,  610 => 224,  608 => 223,  605 => 222,  603 => 194,  599 => 192,  596 => 106,  593 => 105,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 96,  553 => 162,  550 => 94,  544 => 160,  539 => 157,  533 => 156,  521 => 154,  518 => 153,  509 => 83,  504 => 148,  501 => 80,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  470 => 73,  467 => 72,  460 => 136,  457 => 135,  448 => 133,  443 => 132,  440 => 131,  437 => 61,  431 => 129,  425 => 175,  423 => 57,  419 => 164,  416 => 163,  411 => 129,  399 => 124,  392 => 120,  386 => 119,  381 => 118,  378 => 117,  371 => 35,  367 => 180,  365 => 179,  362 => 178,  357 => 125,  355 => 27,  352 => 123,  350 => 26,  343 => 115,  341 => 114,  330 => 105,  310 => 80,  300 => 78,  297 => 77,  291 => 75,  289 => 74,  284 => 72,  279 => 70,  274 => 68,  270 => 67,  266 => 366,  260 => 363,  256 => 61,  250 => 341,  242 => 59,  238 => 312,  235 => 311,  228 => 52,  220 => 290,  205 => 38,  203 => 37,  193 => 33,  184 => 233,  181 => 232,  178 => 28,  165 => 281,  163 => 188,  157 => 104,  154 => 189,  150 => 101,  146 => 181,  140 => 97,  123 => 95,  99 => 68,  96 => 67,  93 => 89,  85 => 86,  80 => 84,  60 => 22,  57 => 27,  55 => 18,  53 => 18,  51 => 26,  49 => 17,  43 => 21,  41 => 13,  37 => 20,  609 => 190,  598 => 107,  594 => 187,  586 => 184,  581 => 182,  575 => 170,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 92,  524 => 90,  517 => 161,  514 => 152,  511 => 159,  506 => 149,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 143,  481 => 128,  478 => 74,  473 => 140,  462 => 108,  458 => 107,  451 => 134,  447 => 102,  442 => 62,  439 => 100,  427 => 89,  424 => 88,  418 => 113,  415 => 112,  413 => 130,  409 => 98,  407 => 127,  404 => 126,  401 => 86,  396 => 141,  394 => 136,  388 => 42,  384 => 130,  382 => 127,  379 => 126,  374 => 36,  360 => 126,  351 => 121,  334 => 120,  329 => 119,  327 => 104,  323 => 116,  320 => 115,  317 => 101,  314 => 85,  312 => 84,  307 => 82,  304 => 79,  301 => 80,  296 => 77,  281 => 411,  278 => 410,  275 => 73,  258 => 354,  255 => 353,  252 => 70,  246 => 66,  240 => 326,  237 => 64,  233 => 304,  229 => 61,  224 => 51,  218 => 59,  206 => 58,  204 => 267,  201 => 56,  198 => 35,  195 => 54,  192 => 53,  189 => 240,  186 => 239,  183 => 50,  180 => 49,  177 => 48,  174 => 217,  172 => 22,  168 => 44,  162 => 40,  159 => 196,  155 => 38,  151 => 188,  148 => 35,  143 => 98,  136 => 168,  133 => 154,  131 => 160,  128 => 152,  122 => 149,  119 => 117,  116 => 116,  112 => 145,  110 => 144,  107 => 143,  105 => 80,  102 => 79,  100 => 70,  97 => 69,  95 => 35,  92 => 34,  87 => 28,  82 => 31,  79 => 32,  76 => 31,  74 => 20,  71 => 19,  69 => 13,  64 => 3,  61 => 2,  58 => 19,  52 => 17,  47 => 16,  45 => 21,  42 => 13,  39 => 12,);
    }
}
