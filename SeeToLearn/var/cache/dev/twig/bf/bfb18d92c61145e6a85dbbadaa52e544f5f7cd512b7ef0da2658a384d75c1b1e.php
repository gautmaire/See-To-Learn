<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_b68e88ed42b2f0980f06ad637d161975b79652deba59c877829d33b7cea9e880 extends Twig_Template
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
        $__internal_234f09625d4ae63eee9ff100e328facadf0c8c8eb9a6ee58f48cd3f02c02a559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234f09625d4ae63eee9ff100e328facadf0c8c8eb9a6ee58f48cd3f02c02a559->enter($__internal_234f09625d4ae63eee9ff100e328facadf0c8c8eb9a6ee58f48cd3f02c02a559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_1c720806479abdadd70b05fcc6a5a5578fb0e1c9cbc3091d8466604111d1701e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c720806479abdadd70b05fcc6a5a5578fb0e1c9cbc3091d8466604111d1701e->enter($__internal_1c720806479abdadd70b05fcc6a5a5578fb0e1c9cbc3091d8466604111d1701e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_234f09625d4ae63eee9ff100e328facadf0c8c8eb9a6ee58f48cd3f02c02a559->leave($__internal_234f09625d4ae63eee9ff100e328facadf0c8c8eb9a6ee58f48cd3f02c02a559_prof);

        
        $__internal_1c720806479abdadd70b05fcc6a5a5578fb0e1c9cbc3091d8466604111d1701e->leave($__internal_1c720806479abdadd70b05fcc6a5a5578fb0e1c9cbc3091d8466604111d1701e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "/Users/StayFan/Desktop/EyeTracker/See-To-Learn/SeeToLearn/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}