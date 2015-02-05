<?php

/* default/index.html.twig */
class __TwigTemplate_7d06d7583b8aabefc5bf2a37e21278c2f6a0ed22a350f04122fbf8918289cf4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<canvas id=\"myCanvas\" width=\"800\" height=\"400\" style=\"border:1px solid #c3c3c3;\">
Your browser does not support the canvas element.
</canvas>
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "<script type=\"text/javascript\">

var c=document.getElementById(\"myCanvas\");
var cxt=c.getContext(\"2d\");
var img=new Image()
img.src=\"/1.jpg\"
cxt.drawImage(img,0,0);

</script>
";
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  39 => 9,  32 => 4,  29 => 3,);
    }
}
