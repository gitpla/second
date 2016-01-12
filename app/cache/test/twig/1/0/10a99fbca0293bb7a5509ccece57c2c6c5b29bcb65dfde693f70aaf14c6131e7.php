<?php

/* blog/index.html.twig */
class __TwigTemplate_10a99fbca0293bb7a5509ccece57c2c6c5b29bcb65dfde693f70aaf14c6131e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4558716958c28b1e2cf76c2780cc8ee23f558c70727d45af85b41095f5b0378e = $this->env->getExtension("native_profiler");
        $__internal_4558716958c28b1e2cf76c2780cc8ee23f558c70727d45af85b41095f5b0378e->enter($__internal_4558716958c28b1e2cf76c2780cc8ee23f558c70727d45af85b41095f5b0378e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4558716958c28b1e2cf76c2780cc8ee23f558c70727d45af85b41095f5b0378e->leave($__internal_4558716958c28b1e2cf76c2780cc8ee23f558c70727d45af85b41095f5b0378e_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c138ef3e8c40fbc43e32725b389b9bb8255eb752cbda35017dde6a66c616f5d2 = $this->env->getExtension("native_profiler");
        $__internal_c138ef3e8c40fbc43e32725b389b9bb8255eb752cbda35017dde6a66c616f5d2->enter($__internal_c138ef3e8c40fbc43e32725b389b9bb8255eb752cbda35017dde6a66c616f5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_c138ef3e8c40fbc43e32725b389b9bb8255eb752cbda35017dde6a66c616f5d2->leave($__internal_c138ef3e8c40fbc43e32725b389b9bb8255eb752cbda35017dde6a66c616f5d2_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_113ec9013d4366048db847a38a10dc0c3962f41f0eb6d090d9e78e8583de182c = $this->env->getExtension("native_profiler");
        $__internal_113ec9013d4366048db847a38a10dc0c3962f41f0eb6d090d9e78e8583de182c->enter($__internal_113ec9013d4366048db847a38a10dc0c3962f41f0eb6d090d9e78e8583de182c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            ";
            // line 14
            echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_113ec9013d4366048db847a38a10dc0c3962f41f0eb6d090d9e78e8583de182c->leave($__internal_113ec9013d4366048db847a38a10dc0c3962f41f0eb6d090d9e78e8583de182c_prof);

    }

    // line 19
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fa27f541ef9e89da4bf5879b054d96586503a376365125556486d453766fd09a = $this->env->getExtension("native_profiler");
        $__internal_fa27f541ef9e89da4bf5879b054d96586503a376365125556486d453766fd09a->enter($__internal_fa27f541ef9e89da4bf5879b054d96586503a376365125556486d453766fd09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 20
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 22
        echo $this->env->getExtension('app.source_code_extension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_fa27f541ef9e89da4bf5879b054d96586503a376365125556486d453766fd09a->leave($__internal_fa27f541ef9e89da4bf5879b054d96586503a376365125556486d453766fd09a_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 22,  94 => 20,  88 => 19,  74 => 14,  67 => 10,  63 => 9,  59 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
