<?php

/* preview.twig */
class __TwigTemplate_89c9a43472604c255afa413db6a9cc8d75958806783a69e62fa9e154737e56bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"js-wpml-ls-preview-wrapper wpml-ls-preview-wrapper";
        if (($context["class"] ?? null)) {
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        }
        echo "\">
    <strong class=\"wpml-ls-preview-label\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["strings"] ?? null), "misc", array()), "label_preview", array()), "html", null, true);
        echo "</strong>
    <span class=\"spinner\"></span>
    <div class=\"js-wpml-ls-preview\">";
        // line 4
        echo $this->getAttribute(($context["preview"] ?? null), "html", array());
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "preview.twig", "/var/www/domains/wecan-group.info/hwashin.wecan-group.info/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/preview.twig");
    }
}
