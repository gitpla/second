<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_d33cf670ff4e629851f62bbda157f6e9144010312b4d7af4a76ac3ae4adc738b extends Twig_Template
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
        $__internal_1e84aff19003cac3e5547bf21794b4603428aa286c8fc187c41160f3abf07a8e = $this->env->getExtension("native_profiler");
        $__internal_1e84aff19003cac3e5547bf21794b4603428aa286c8fc187c41160f3abf07a8e->enter($__internal_1e84aff19003cac3e5547bf21794b4603428aa286c8fc187c41160f3abf07a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_1e84aff19003cac3e5547bf21794b4603428aa286c8fc187c41160f3abf07a8e->leave($__internal_1e84aff19003cac3e5547bf21794b4603428aa286c8fc187c41160f3abf07a8e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
