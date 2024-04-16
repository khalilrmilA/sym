<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* reclamationsh/index.html.twig */
class __TwigTemplate_644a1d4909bbb6848a9904b3bd887d63 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamationsh/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamationsh/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamationsh/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  show reclamation!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <!-- Start BLog Area -->
  <div class=\"rn-blog-area rn-section-gapTop\">
    <div class=\"container\">
      <div class=\"row mb--50 align-items-center\">
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-12\">
          <h5>Here you can find all your reclamation hope you find it good</h5>
        </div>
        
      </div>
      ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["success"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "      <div class=\"row g-5 d-flex flex-wrap\">
        <!-- [:4] -->
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recc"]) || array_key_exists("recc", $context) ? $context["recc"] : (function () { throw new RuntimeError('Variable "recc" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recll"]) {
            // line 25
            echo "          <div class=\"inner flex-grow-1\" style=\"max-width: 300px; overflow-wrap: break-word;\">
            <div class=\"thumbnail\">
              <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamationsh.modifer", ["id" => twig_get_attribute($this->env, $this->source, $context["recll"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/reclamation/" . twig_get_attribute($this->env, $this->source, $context["recll"], "getImagePath", [], "method", false, false, false, 27))), "html", null, true);
            echo "\" alt=\"Personal Portfolio Images\" /><span class=\"text-center color-white\"><i class=\"feather-edit\"></i></span></a>
            </div>
            <div class=\"content\">
              <div class=\"category-info\">
                <div class=\"category-list\">
              <a href=\"javascript:void(0);\" class=\"reclamation-subject\" data-id=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recll"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recll"], "subject", [], "any", false, false, false, 32), "html", null, true);
            echo "</a>
                </div>
                <div class=\"meta\">
                  <span>
                    <i class=\"feather-clock\"></i>
                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->timeAgoFilter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recll"], "createdAt", [], "any", false, false, false, 37), "Y-m-dTH:i:sP")), "html", null, true);
            echo "
                  </span>
                </div>
              </div>
              <h4 class=\"title\">
                           
                              ";
            // line 43
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recll"], "description", [], "any", false, false, false, 43)) > 10)) {
                // line 44
                echo "                                ";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["recll"], "description", [], "any", false, false, false, 44), 0, 10), "html", null, true);
                echo "...
                              ";
            } else {
                // line 46
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recll"], "description", [], "any", false, false, false, 46), "html", null, true);
                echo "
                              ";
            }
            // line 48
            echo "                            <button class=\"btn btn-danger delete-reclamation\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recll"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">Delete</button>
                          
                          </h4>
            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recll'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "      </div>
    </div>
  </div>

  <!-- End BLog Area -->

  <div class=\"mouse-cursor cursor-inner\"></div>
  <!-- Start Top To Bottom Area -->
  <div class=\"rn-progress-parent\">
    <svg class=\"rn-back-circle svg-inner\" width=\"100%\" height=\"100%\" viewbox=\"-1 -1 102 102\">
      <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" />
    </svg>
  </div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
      const deleteButtons = document.querySelectorAll('.delete-reclamation');
    
      deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
          e.preventDefault();
          const reclamationId = this.getAttribute('data-id');
          
          if (confirm('Are you sure?')) {
            fetch(`";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reclamationsh.del", ["id" => "ID_PLACEHOLDER"]);
        echo "`.replace('ID_PLACEHOLDER', reclamationId), {
              method: 'POST',
              // Include any necessary headers, CSRF tokens, etc.
            }).then(response => {
              if (response.ok) {
                document.getElementById(`reclamation-\${reclamationId}`).remove();
              } else {
                //alert('Could not delete the reclamation.');
              }
            }).catch(error => console.error('Error:', error));
          }
        });
      });
    });
    </script>


<!-- Modal Structure -->
<div class=\"modal fade\" id=\"reclamationModal\" tabindex=\"-1\" aria-labelledby=\"reclamationModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"reclamationModalLabel\"></h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <img id=\"modalReclamationImage\" src=\"\" alt=\"Reclamation Image\" class=\"img-fluid mb-2\">
        <h3 id=\"modalReclamationSubject\"></h3>
      <div><strong>Created At:</strong> <span id=\"modalReclamationDate\"></span></div>  
      <div><strong>Description:</strong> <span id=\"modalReclamationDescription\"></span></div>
        
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>




<script>
  document.addEventListener('DOMContentLoaded', function () {
    const subjectLinks = document.querySelectorAll('.reclamation-subject');

    subjectLinks.forEach(link => {
      link.addEventListener('click', function() {
        const id = this.getAttribute('data-id');

        // Fetch reclamation details using the ID
        fetch(`/reclamation/details/\${id}`)
          .then(response => response.json())
          .then(data => {
            
            // Set the image path
            document.getElementById('modalReclamationImage').src = `";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/reclamation/"), "html", null, true);
        echo "\${data.imagePath}`;
            // Set the subject as the title of the modal
            const modalTitle = document.getElementById('reclamationModalLabel');
            modalTitle.textContent = data.subject;
            // Format and populate the creation date
            document.getElementById('modalReclamationDate').textContent = new Date(data.createdAt).toLocaleString();

            // Populate the description
            document.getElementById('modalReclamationDescription').textContent = data.description;


            // Show the modal
            new bootstrap.Modal(document.getElementById('reclamationModal')).show();
          })
          .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while fetching the reclamation details.');
          });
      });
    });
  });
</script>

  
<style>
  .modal-content {
    background-color: #2c3034; /* Dark background */
    color: #ffffff; /* White text */
    border: none;
}

.modal-header {
    border-bottom: none;
}

.modal-footer {
    border-top: none;
}

.btn-close {
    filter: invert(1); /* Make the close button white */
}

/* Match the font styles from your site */
.modal-title, .modal-body, .modal-footer {
    font-family: 'Your Font Family', sans-serif;
    /* Your font styles here */
}

</style>
  

  
  
  
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamationsh/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  269 => 133,  210 => 77,  185 => 54,  172 => 48,  166 => 46,  160 => 44,  158 => 43,  149 => 37,  139 => 32,  129 => 27,  125 => 25,  121 => 24,  117 => 22,  108 => 19,  105 => 18,  101 => 17,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  show reclamation!
{% endblock %}

{% block body %}
  <!-- Start BLog Area -->
  <div class=\"rn-blog-area rn-section-gapTop\">
    <div class=\"container\">
      <div class=\"row mb--50 align-items-center\">
        <div class=\"col-lg-6 col-md-6 col-sm-6 col-12\">
          <h5>Here you can find all your reclamation hope you find it good</h5>
        </div>
        
      </div>
      {% for message in app.flashes('success') %}
\t\t\t\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t\t\t\t{{message}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
      <div class=\"row g-5 d-flex flex-wrap\">
        <!-- [:4] -->
        {% for recll in recc %}
          <div class=\"inner flex-grow-1\" style=\"max-width: 300px; overflow-wrap: break-word;\">
            <div class=\"thumbnail\">
              <a href=\"{{ path('reclamationsh.modifer', { id: recll.id }) }}\"><img src=\"{{ asset('images/reclamation/' ~ recll.getImagePath()) }}\" alt=\"Personal Portfolio Images\" /><span class=\"text-center color-white\"><i class=\"feather-edit\"></i></span></a>
            </div>
            <div class=\"content\">
              <div class=\"category-info\">
                <div class=\"category-list\">
              <a href=\"javascript:void(0);\" class=\"reclamation-subject\" data-id=\"{{ recll.id }}\">{{ recll.subject }}</a>
                </div>
                <div class=\"meta\">
                  <span>
                    <i class=\"feather-clock\"></i>
                    {{ recll.createdAt|date('Y-m-d\\TH:i:sP')|time_ago }}
                  </span>
                </div>
              </div>
              <h4 class=\"title\">
                           
                              {% if (recll.description|length) > 10 %}
                                {{ recll.description|slice(0, 10) }}...
                              {% else %}
                                {{ recll.description }}
                              {% endif %}
                            <button class=\"btn btn-danger delete-reclamation\" data-id=\"{{ recll.id }}\">Delete</button>
                          
                          </h4>
            </div>
          </div>
        {% endfor %}
      </div>
    </div>
  </div>

  <!-- End BLog Area -->

  <div class=\"mouse-cursor cursor-inner\"></div>
  <!-- Start Top To Bottom Area -->
  <div class=\"rn-progress-parent\">
    <svg class=\"rn-back-circle svg-inner\" width=\"100%\" height=\"100%\" viewbox=\"-1 -1 102 102\">
      <path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" />
    </svg>
  </div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
      const deleteButtons = document.querySelectorAll('.delete-reclamation');
    
      deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
          e.preventDefault();
          const reclamationId = this.getAttribute('data-id');
          
          if (confirm('Are you sure?')) {
            fetch(`{{ path('reclamationsh.del', {'id': 'ID_PLACEHOLDER'}) }}`.replace('ID_PLACEHOLDER', reclamationId), {
              method: 'POST',
              // Include any necessary headers, CSRF tokens, etc.
            }).then(response => {
              if (response.ok) {
                document.getElementById(`reclamation-\${reclamationId}`).remove();
              } else {
                //alert('Could not delete the reclamation.');
              }
            }).catch(error => console.error('Error:', error));
          }
        });
      });
    });
    </script>


<!-- Modal Structure -->
<div class=\"modal fade\" id=\"reclamationModal\" tabindex=\"-1\" aria-labelledby=\"reclamationModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"reclamationModalLabel\"></h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        <img id=\"modalReclamationImage\" src=\"\" alt=\"Reclamation Image\" class=\"img-fluid mb-2\">
        <h3 id=\"modalReclamationSubject\"></h3>
      <div><strong>Created At:</strong> <span id=\"modalReclamationDate\"></span></div>  
      <div><strong>Description:</strong> <span id=\"modalReclamationDescription\"></span></div>
        
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>




<script>
  document.addEventListener('DOMContentLoaded', function () {
    const subjectLinks = document.querySelectorAll('.reclamation-subject');

    subjectLinks.forEach(link => {
      link.addEventListener('click', function() {
        const id = this.getAttribute('data-id');

        // Fetch reclamation details using the ID
        fetch(`/reclamation/details/\${id}`)
          .then(response => response.json())
          .then(data => {
            
            // Set the image path
            document.getElementById('modalReclamationImage').src = `{{ asset('images/reclamation/') }}\${data.imagePath}`;
            // Set the subject as the title of the modal
            const modalTitle = document.getElementById('reclamationModalLabel');
            modalTitle.textContent = data.subject;
            // Format and populate the creation date
            document.getElementById('modalReclamationDate').textContent = new Date(data.createdAt).toLocaleString();

            // Populate the description
            document.getElementById('modalReclamationDescription').textContent = data.description;


            // Show the modal
            new bootstrap.Modal(document.getElementById('reclamationModal')).show();
          })
          .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while fetching the reclamation details.');
          });
      });
    });
  });
</script>

  
<style>
  .modal-content {
    background-color: #2c3034; /* Dark background */
    color: #ffffff; /* White text */
    border: none;
}

.modal-header {
    border-bottom: none;
}

.modal-footer {
    border-top: none;
}

.btn-close {
    filter: invert(1); /* Make the close button white */
}

/* Match the font styles from your site */
.modal-title, .modal-body, .modal-footer {
    font-family: 'Your Font Family', sans-serif;
    /* Your font styles here */
}

</style>
  

  
  
  
    
{% endblock %}
", "reclamationsh/index.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\reclamationsh\\index.html.twig");
    }
}
