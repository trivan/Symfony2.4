<?php

/* WebProfilerBundle:Collector:config.html.twig */
class __TwigTemplate_ba1e8c184c9b9c1add5e180c48b2f7e7055c0f5614897dc3280116dfb4944e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <a href=\"http://symfony.com/\">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\" />
            <span>
                ";
        // line 9
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname")) {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion"), "html", null, true);
            echo "
                ";
        } else {
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
            echo "
                ";
        }
        // line 14
        echo "            </span>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname")) {
            // line 19
            echo "            <div class=\"sf-toolbar-info-piece\">
                ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname"), "html", null, true);
            echo " <b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion"), "html", null, true);
            echo "</b>
            </div>
        ";
        }
        // line 23
        echo "        <div class=\"sf-toolbar-info-piece\">
            Symfony <b>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
        echo "</b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <a href=\"http://symfony.com/doc/";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
        echo "/index.html\" rel=\"help\">Symfony Documentation</a>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        // line 31
        echo "
    ";
        // line 33
        echo "    ";
        ob_start();
        // line 34
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\">
            <img width=\"26\" height=\"28\" alt=\"PHP\" src=\"data:image/png;base64,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\" />
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "    ";
        ob_start();
        // line 39
        echo "        ";
        ob_start();
        // line 40
        echo "            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP</b>
                <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 46
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug")) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 47
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator")) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "sapiName"), "html", null, true);
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 54
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 55
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
        // line 56
        echo "
    ";
        // line 58
        echo "    ";
        ob_start();
        echo "sf-toolbar-status sf-toolbar-status-";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug")) ? ("green") : ("red"));
        $context["debug_status_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 59
        echo "    ";
        ob_start();
        // line 60
        echo "        <img width=\"21\" height=\"28\" alt=\"Environment\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAZlBMVEX///////////////////////////////////////////////////////////////////////////////////////////+ZmZmZmZlISEhJSUmdnZ1HR0fR0dFZWVlpaWlfX18/Pz+puygPAAAAIXRSTlMACwwlJygpLzIzNjs8QEtMUmd6e32AucDBw8fIydTm6u5l8MjvAAAAo0lEQVR42r2P2Q6CMBBFL6XsZRGRfZv//0nbDBNEE19MnJeTc5ILKf58ahiUwzy/AJpIWwREwQnEXRdbGCLjrO+djWRvVMiJcigxB7viGogxDdJpSmHEmCVPS7YczJvgUu+CS30IvtbNYZMvsGVo2mVpG/kbm4auiCpdcC3YPCAhSpAdUzaAn6qPKZtUT6ZSzb4bi2hdo9MQ1nX4ASjfV+/4/Z40pyCHrNTbIgAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-info-piece-additional-detail ";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["debug_status_class"]) ? $context["debug_status_class"] : $this->getContext($context, "debug_status_class")), "html", null, true);
        echo "\"> </span>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "</span>
        ";
        // line 63
        if ((("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname")) || ("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env")))) {
            // line 64
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-info-with-delimiter\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"), "html", null, true);
            echo "</span>
                <span>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 69
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 70
        echo "    ";
        ob_start();
        // line 71
        echo "        ";
        ob_start();
        // line 72
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"))) {
            // line 73
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Name</b>
                    <span>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 78
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"))) {
            // line 79
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 84
        echo "            ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug"))) {
            // line 85
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["debug_status_class"]) ? $context["debug_status_class"] : $this->getContext($context, "debug_status_class")), "html", null, true);
            echo "\">";
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug")) ? ("en") : ("dis"));
            echo "abled</span>
                </div>
            ";
        }
        // line 90
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token</b>
                <span>
                    ";
        // line 93
        if ((isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url"))) {
            // line 94
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token"), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 96
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "token"), "html", null, true);
            echo "
                    ";
        }
        // line 98
        echo "                </span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 101
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 102
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 105
    public function block_menu($context, array $blocks = array())
    {
        // line 106
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAZlBMVEX///////////////////////////////////////////////////////////////////////////////////////////+ZmZmZmZlISEhJSUmdnZ1HR0fR0dFZWVlpaWlfX18/Pz+puygPAAAAIXRSTlMACwwlJygpLzIzNjs8QEtMUmd6e32AucDBw8fIydTm6u5l8MjvAAAAo0lEQVR42r2P2Q6CMBBFL6XsZRGRfZv//0nbDBNEE19MnJeTc5ILKf58ahiUwzy/AJpIWwREwQnEXRdbGCLjrO+djWRvVMiJcigxB7viGogxDdJpSmHEmCVPS7YczJvgUu+CS30IvtbNYZMvsGVo2mVpG/kbm4auiCpdcC3YPCAhSpAdUzaAn6qPKZtUT6ZSzb4bi2hdo9MQ1nX4ASjfV+/4/Z40pyCHrNTbIgAAAABJRU5ErkJggg==\" alt=\"Configuration\"></span>
    <strong>Config</strong>
</span>
";
    }

    // line 112
    public function block_panel($context, array $blocks = array())
    {
        // line 113
        echo "    <h2>Project Configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            ";
        // line 120
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname")) {
            // line 121
            echo "                <th>Application</th>
                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "applicationversion"), "html", null, true);
            echo " (on Symfony ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
            echo ")</td>
            ";
        } else {
            // line 124
            echo "                <th>Symfony version</th>
                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "symfonyversion"), "html", null, true);
            echo "</td>
            ";
        }
        // line 127
        echo "        </tr>
        ";
        // line 128
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"))) {
            // line 129
            echo "            <tr>
                <th>Application name</th>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "appname"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 134
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"))) {
            // line 135
            echo "            <tr>
                <th>Environment</th>
                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "env"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 140
        echo "        ";
        if (("n/a" != $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug"))) {
            // line 141
            echo "            <tr>
                <th>Debug</th>
                <td>";
            // line 143
            echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "debug")) ? ("enabled") : ("disabled"));
            echo "</td>
            </tr>
        ";
        }
        // line 146
        echo "    </table>

    <h2>PHP configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>PHP version</th>
            <td>";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "phpversion"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Xdebug</th>
            <td>";
        // line 160
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxdebug")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>PHP acceleration</th>
            <td>";
        // line 164
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasaccelerator")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>XCache</th>
            <td>";
        // line 168
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasxcache")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>APC</th>
            <td>";
        // line 172
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasapc")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Zend OPcache</th>
            <td>";
        // line 176
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haszendopcache")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>EAccelerator</th>
            <td>";
        // line 180
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "haseaccelerator")) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Full PHP configuration</th>
            <td><a href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("_profiler_phpinfo");
        echo "\"><code>phpinfo</code></a></td>
        </tr>
    </table>

    ";
        // line 188
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles")) {
            // line 189
            echo "        <h2>Active bundles</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Path</th>
            </tr>
            ";
            // line 195
            $context["bundles"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "bundles");
            // line 196
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["bundles"]) ? $context["bundles"] : $this->getContext($context, "bundles")))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 197
                echo "            <tr>
                <th>";
                // line 198
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "</th>
                <td>";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bundles"]) ? $context["bundles"] : $this->getContext($context, "bundles")), (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "array"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 198,  446 => 197,  441 => 196,  380 => 160,  373 => 156,  226 => 84,  207 => 75,  306 => 141,  303 => 122,  280 => 131,  537 => 178,  520 => 170,  516 => 169,  496 => 161,  479 => 153,  475 => 152,  421 => 126,  414 => 122,  408 => 176,  403 => 117,  375 => 106,  372 => 105,  348 => 140,  325 => 129,  313 => 90,  292 => 135,  161 => 71,  215 => 78,  191 => 69,  694 => 412,  685 => 406,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  592 => 351,  585 => 347,  579 => 342,  577 => 341,  571 => 338,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  486 => 292,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  429 => 188,  366 => 210,  361 => 146,  331 => 187,  272 => 158,  267 => 101,  347 => 134,  338 => 135,  319 => 92,  277 => 78,  265 => 126,  262 => 98,  257 => 149,  248 => 94,  239 => 97,  213 => 78,  134 => 47,  127 => 60,  212 => 74,  210 => 75,  202 => 77,  137 => 46,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 403,  677 => 199,  675 => 198,  671 => 196,  668 => 395,  665 => 194,  661 => 191,  658 => 391,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 330,  553 => 186,  550 => 185,  521 => 154,  518 => 307,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 189,  419 => 164,  416 => 163,  399 => 116,  386 => 111,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  343 => 132,  330 => 105,  310 => 89,  300 => 121,  297 => 77,  291 => 169,  289 => 113,  256 => 96,  250 => 93,  242 => 113,  228 => 68,  181 => 65,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 398,  666 => 200,  663 => 393,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 355,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 172,  522 => 165,  513 => 168,  509 => 304,  507 => 157,  504 => 302,  483 => 154,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 139,  443 => 137,  425 => 175,  422 => 184,  420 => 249,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 113,  385 => 116,  371 => 182,  358 => 139,  346 => 99,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 123,  316 => 121,  308 => 88,  288 => 107,  286 => 112,  274 => 129,  260 => 124,  251 => 101,  205 => 38,  197 => 71,  194 => 70,  178 => 64,  129 => 57,  609 => 362,  598 => 188,  594 => 187,  586 => 184,  581 => 345,  575 => 170,  573 => 179,  567 => 337,  558 => 172,  554 => 171,  548 => 184,  545 => 169,  541 => 180,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 306,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  495 => 133,  492 => 295,  489 => 157,  485 => 143,  481 => 290,  478 => 127,  473 => 140,  462 => 202,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 195,  424 => 128,  418 => 113,  415 => 180,  404 => 126,  401 => 172,  396 => 234,  394 => 168,  388 => 112,  382 => 127,  351 => 141,  334 => 120,  329 => 131,  327 => 126,  323 => 128,  320 => 127,  317 => 101,  307 => 82,  304 => 174,  301 => 117,  296 => 82,  281 => 105,  275 => 105,  255 => 74,  237 => 70,  233 => 87,  206 => 71,  192 => 88,  174 => 60,  392 => 120,  389 => 103,  383 => 224,  377 => 99,  354 => 102,  352 => 123,  349 => 90,  342 => 137,  335 => 134,  332 => 85,  326 => 185,  324 => 82,  318 => 145,  315 => 125,  302 => 84,  299 => 83,  293 => 109,  287 => 68,  284 => 106,  282 => 66,  279 => 104,  276 => 64,  271 => 108,  263 => 125,  234 => 48,  231 => 47,  218 => 59,  186 => 82,  180 => 62,  90 => 27,  12 => 34,  81 => 23,  20 => 11,  170 => 79,  150 => 55,  146 => 49,  153 => 56,  34 => 16,  76 => 28,  97 => 41,  70 => 19,  53 => 12,  65 => 30,  270 => 102,  266 => 66,  261 => 107,  253 => 95,  244 => 65,  236 => 109,  216 => 79,  211 => 81,  200 => 72,  195 => 54,  188 => 49,  184 => 64,  172 => 62,  100 => 36,  84 => 24,  58 => 17,  167 => 48,  165 => 60,  160 => 76,  126 => 42,  118 => 28,  113 => 38,  249 => 101,  232 => 84,  225 => 87,  222 => 81,  198 => 66,  190 => 92,  185 => 66,  175 => 77,  155 => 53,  152 => 92,  114 => 71,  110 => 22,  23 => 12,  148 => 64,  124 => 31,  104 => 49,  77 => 27,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 199,  444 => 149,  440 => 131,  437 => 134,  435 => 258,  430 => 130,  427 => 129,  423 => 166,  413 => 130,  409 => 98,  407 => 242,  402 => 130,  398 => 129,  393 => 114,  387 => 164,  384 => 130,  381 => 108,  379 => 126,  374 => 114,  368 => 103,  365 => 141,  362 => 178,  360 => 126,  355 => 143,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 124,  309 => 117,  305 => 87,  298 => 120,  294 => 83,  285 => 111,  283 => 166,  278 => 106,  268 => 127,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 99,  177 => 61,  169 => 57,  140 => 97,  132 => 59,  128 => 58,  107 => 52,  61 => 12,  273 => 96,  269 => 100,  254 => 102,  243 => 89,  240 => 64,  238 => 139,  235 => 56,  230 => 106,  227 => 134,  224 => 103,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 66,  179 => 66,  159 => 70,  143 => 48,  135 => 62,  119 => 40,  102 => 33,  71 => 55,  67 => 18,  63 => 19,  59 => 14,  38 => 6,  94 => 34,  89 => 40,  85 => 32,  75 => 39,  68 => 31,  56 => 11,  87 => 33,  21 => 12,  26 => 9,  93 => 34,  88 => 31,  78 => 26,  46 => 8,  27 => 8,  44 => 19,  31 => 3,  28 => 3,  201 => 65,  196 => 65,  183 => 50,  171 => 63,  166 => 100,  163 => 45,  158 => 79,  156 => 58,  151 => 36,  142 => 61,  138 => 61,  136 => 60,  121 => 53,  117 => 19,  105 => 34,  91 => 34,  62 => 29,  49 => 13,  24 => 13,  25 => 35,  19 => 11,  79 => 37,  72 => 37,  69 => 24,  47 => 8,  40 => 6,  37 => 5,  22 => 12,  246 => 93,  157 => 104,  145 => 52,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 50,  111 => 30,  108 => 19,  101 => 43,  98 => 47,  96 => 30,  83 => 32,  74 => 27,  66 => 25,  55 => 21,  52 => 14,  50 => 20,  43 => 9,  41 => 10,  35 => 5,  32 => 16,  29 => 3,  209 => 96,  203 => 73,  199 => 67,  193 => 33,  189 => 71,  187 => 87,  182 => 85,  176 => 63,  173 => 42,  168 => 61,  164 => 72,  162 => 59,  154 => 67,  149 => 50,  147 => 54,  144 => 68,  141 => 51,  133 => 49,  130 => 46,  125 => 45,  122 => 44,  116 => 39,  112 => 52,  109 => 40,  106 => 45,  103 => 46,  99 => 31,  95 => 43,  92 => 45,  86 => 43,  82 => 28,  80 => 30,  73 => 20,  64 => 17,  60 => 22,  57 => 12,  54 => 25,  51 => 24,  48 => 9,  45 => 10,  42 => 7,  39 => 17,  36 => 5,  33 => 4,  30 => 3,);
    }
}
