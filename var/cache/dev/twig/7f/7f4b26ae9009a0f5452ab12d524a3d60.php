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

/* conference/backReclamation.html.twig */
class __TwigTemplate_2c3228c020b8753e7d76e1b6978049b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "index_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conference/backReclamation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conference/backReclamation.html.twig"));

        $this->parent = $this->loadTemplate("index_admin.html.twig", "conference/backReclamation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
\t<table class=\"table fs-9 mb-0\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:350px;\">IMAGE</th>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:150px;\">PRIVATE KEY</th>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:150px;\">PUBLISH</th>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:150px;\">SUBJECT</th>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:350px;\">DESCRIPTION</th>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:350px;\">ETAT</th>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\">RESPONSE</th>
\t\t\t\t<!-- Add this column for responses -->
\t\t\t\t<th class=\"sort text-end align-middle pe-0 ps-4\" scope=\"col\"></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody class=\"list\" id=\"products-table-body\">
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 20
            echo "\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t<td class=\"align-middle ps-4\">
\t\t\t\t\t\t<img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/reclamation/" . twig_get_attribute($this->env, $this->source, $context["reclamation"], "imagePath", [], "any", false, false, false, 22))), "html", null, true);
            echo "\" alt=\"Reclamation Image\" width=\"200\" height=\"200\"/>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"align-middle ps-4\">
\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "privateKey", [], "any", false, false, false, 25), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"align-middle ps-4\">
\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->timeAgoFilter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "createdAt", [], "any", false, false, false, 28), "Y-m-dTH:i:sP")), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"align-middle ps-4\">
\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "subject", [], "any", false, false, false, 31), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"align-middle ps-4\">
\t\t\t\t\t\t";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 34), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"align-middle ps-4\">
\t\t\t\t\t\t";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["reclamation"], "reponse", [], "any", false, false, false, 37)) {
                // line 38
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamation"], "reponse", [], "any", false, false, false, 38), "repReclamation", [], "any", false, false, false, 38), "html", null, true);
                echo "
\t\t\t\t\t\t\t<span class=\"badge badge-phoenix fs-10 mb-4 badge-phoenix-success\">Done</span>
\t\t\t\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t\t\t\t<span class=\"badge badge-phoenix fs-10 mb-4 badge-phoenix-danger\">Still panding</span>
\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4\">
\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item add-response\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addResponseModal\" data-reclamation-id=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\" data-reclamation-subject=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "subject", [], "any", false, false, false, 50), "html", null, true);
            echo "\" data-reclamation-description=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 50), "html", null, true);
            echo "\">Add Response</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item mod-response\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addResponseModal\" data-reclamation-id=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\" data-reclamation-subject=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "subject", [], "any", false, false, false, 51), "html", null, true);
            echo "\" data-reclamation-description=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "description", [], "any", false, false, false, 51), "html", null, true);
            echo "\" data-reclamation-response=\"";
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "reponse", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reclamation"], "reponse", [], "any", false, false, false, 51), "repReclamation", [], "any", false, false, false, 51), "html", null, true))) : (print ("")));
            echo "\">Mod Rec</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t</tbody>
\t</table>
\t<!-- Pagination Controls -->
\t<nav aria-label=\"Page navigation\">
\t\t<ul class=\"pagination\">
\t\t\t";
        // line 63
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 63, $this->source); })()) > 1)) {
            // line 64
            echo "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conference", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 65, $this->source); })()) - 1)]), "html", null, true);
            echo "\">Previous</a>
\t\t\t\t</li>
\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<span class=\"page-link\">Previous</span>
\t\t\t\t</li>
\t\t\t";
        }
        // line 72
        echo "
\t\t\t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 73, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 74
            echo "\t\t\t\t<li class=\"page-item ";
            echo ((((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 74, $this->source); })()) == $context["i"])) ? ("active") : (""));
            echo "\">
\t\t\t\t\t<a class=\"page-link\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conference", ["page" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
\t\t\t";
        // line 79
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 79, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 79, $this->source); })()))) {
            // line 80
            echo "\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conference", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 81, $this->source); })()) + 1)]), "html", null, true);
            echo "\">Next</a>
\t\t\t\t</li>
\t\t\t";
        } else {
            // line 84
            echo "\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<span class=\"page-link\">Next</span>
\t\t\t\t</li>
\t\t\t";
        }
        // line 88
        echo "\t\t</ul>
\t</nav>

\t<div class=\"modal fade\" id=\"addResponseModal\" tabindex=\"-1\" aria-labelledby=\"addResponseModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"addResponseModalLabel\">Add Response to Reclamation</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"modal-body\">
\t\t\t\t\t<!-- Placeholders for reclamation details -->
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Subject:</strong>
\t\t\t\t\t\t<span id=\"reclamationSubject\"></span>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Description:</strong>
\t\t\t\t\t\t<span id=\"reclamationDescription\"></span>
\t\t\t\t\t</p>
\t\t\t\t\t<!-- Form for submitting a response -->
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<label class=\" fw-bold mb-2 error-label\" id=\"error-label\"></label>
\t\t\t\t\t</div>

\t\t\t\t\t<form id=\"responseForm\">
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"responseText\" class=\"form-label\">Your Response</label>
\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"responseText\" rows=\"3\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"hidden\" id=\"reclamationId\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit Response</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
const deleteButtons = document.querySelectorAll('.delete-reclamation');

deleteButtons.forEach(function (button) {
button.addEventListener('click', function (e) {
e.preventDefault();
const reclamationId = this.getAttribute('data-id');

if (confirm('Are you sure?')) {
fetch (`/delete-reclamation/\${reclamationId}`, { // Update the endpoint to your delete route
method: 'POST',
headers: {
'X-Requested-With': 'XMLHttpRequest'
}
}).then(response => {
if (response.ok) {
document.getElementById (`reclamation-\${reclamationId}`).remove();
window.location.reload();
} else {
window.location.reload();
}
}).catch(error => console.error('Error:', error));
}
});
});
});


\$('#responseForm').submit(function (event) {
event.preventDefault();
var responseText = \$('#responseText').val().trim();
var reclamationId = \$('#reclamationId').val();

\$.ajax({
url: '/reclamation/' + reclamationId + '/add-response',
method: 'POST',
data: {
response: responseText
},
success: function (response) {
alert('Response added successfully');

var rowToUpdate = document.querySelector('tr[data-reclamation-id=\"' + reclamationId + '\"]');
var responseCell = rowToUpdate.querySelector('.response-cell-class');
// Use actual property from response, for example response.newResponse
responseCell.textContent = response.newResponse || 'Done'; // Adjust based on actual response structure
responseCell.classList.remove('badge-phoenix-danger');
responseCell.classList.add('badge-phoenix-success');
},
error: function (xhr, status, error) {
if (xhr.responseJSON && xhr.responseJSON.error === 'VALIDATION_ERROR') {
const errorMessage = xhr.responseJSON.messages.join(', '); // Join error messages with ','
const errorMessagesArray = errorMessage.split(','); // Split the error messages on ','
let errorMessagesHTML = '';
// Initialize an empty string to store HTML for error messages

// Loop through each error message and create HTML for it
errorMessagesArray.forEach((message) => {
errorMessagesHTML += `<div>\${
message.trim()
}</div>`; // Trim whitespace and wrap each message in a <div>
});
\$('.error-label').html(errorMessagesHTML);
} else {
var errorMessage = 'An error occurred';
if (xhr.responseJSON && xhr.responseJSON.error) {
errorMessage = xhr.responseJSON.error;
}
alert(errorMessage);
}
}
});
});

let lastReclamationId = ";
        // line 201
        (((twig_length_filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 201, $this->source); })())) > 0)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 201, $this->source); })())), "id", [], "any", false, false, false, 201), "html", null, true))) : (print (0)));
        echo ";

function pollForNewReclamations() {
fetch('/get-latest-reclamations').then(response => response.json()).then(data => {
if (data.reclamations && data.reclamations.length > 0) {
const newReclamations = data.reclamations.filter(reclamation => reclamation.id > lastReclamationId);
if (newReclamations.length > 0) {
lastReclamationId = newReclamations[0].id;
updateTable(newReclamations);
}
}
}).catch(error => console.error('Error fetching latest reclamations:', error));
}

function updateTable(reclamations) {
    const tableBody = document.getElementById('products-table-body');
    reclamations.sort((a, b) => b.id - a.id).forEach(reclamation => {
        const row = document.createElement('tr');
        row.className = 'position-static';
        let responseStatusHTML = reclamation.response ? `<span class=\"badge badge-phoenix fs-10 mb-4 badge-phoenix-success\">Done</span>` : `<span class=\"badge badge-phoenix fs-10 mb-4 badge-phoenix-danger\">Still pending</span>`;

        row.innerHTML = `
            <td class=\"align-middle ps-4\">
              <img src=\"/images/reclamation/\${reclamation.imagePath}\" alt=\"Reclamation Image\" width=\"200\" height=\"200\"/>
            </td>
            <td class=\"align-middle ps-4\">\${reclamation.privateKey}</td>
            <td class=\"align-middle ps-4\">\${reclamation.createdAt}</td>
            <td class=\"align-middle ps-4\">\${reclamation.subject}</td>
            <td class=\"align-middle ps-4\">\${reclamation.description}</td>
            <td class=\"align-middle ps-4\">\${responseStatusHTML}</td>
            <td class=\"align-middle white-space-nowrap text-end pe-0 ps-4\">
              <div class=\"btn-reveal-trigger position-static\">
                <button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  <span class=\"fas fa-ellipsis-h fs-10\"></span>
                </button>
                <div class=\"dropdown-menu dropdown-menu-end py-2\">
                  <a class=\"dropdown-item add-response\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addResponseModal\" data-reclamation-id=\"\${reclamation.id}\" data-reclamation-subject=\"\${reclamation.subject}\" data-reclamation-description=\"\${reclamation.description}\">Add Response</a>
                  <a class=\"dropdown-item\" href=\"#\">Reclamation</a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item text-danger delete-reclamation\" href=\"#\" data-id=\"\${reclamation.id}\">Delete Reclamation</a>
                </div>
              </div>
            </td>
          `;
        tableBody.prepend(row);
    });
    // Check if there are new reclamations to notify
    if (reclamations.length > 0) {
        alert('New reclamation added!');
    }
}

document.addEventListener('click', function(event) {
    if (event.target.matches('.add-response, .mod-response')) {
        const reclamationId = event.target.getAttribute('data-reclamation-id');
        const reclamationSubject = event.target.getAttribute('data-reclamation-subject');
        const reclamationDescription = event.target.getAttribute('data-reclamation-description');
        const reclamationResponse = event.target.getAttribute('data-reclamation-response') || '';

        document.getElementById('reclamationSubject').textContent = reclamationSubject;
        document.getElementById('reclamationDescription').textContent = reclamationDescription;
        document.getElementById('reclamationId').value = reclamationId;
        document.getElementById('responseText').value = reclamationResponse; // Set the existing response

        \$('#addResponseModal').modal('show');
    }
});


setInterval(pollForNewReclamations, 10000);
\t</script>

\t<style>
\t\t.input-invalid {
\t\t\tborder-color: #DC143C; /* Change border color to red */
\t\t}

\t\t.input-typing {
\t\t\tborder-color: #50C878;
\t\t}
\t\t.error-label {
\t\t\tcolor: red;
\t\t}
\t</style>


\t<!-- ===============================================-->
<!--    End of Main Content-->
\t<!-- ===============================================-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "conference/backReclamation.html.twig";
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
        return array (  355 => 201,  240 => 88,  234 => 84,  228 => 81,  225 => 80,  223 => 79,  220 => 78,  209 => 75,  204 => 74,  200 => 73,  197 => 72,  191 => 68,  185 => 65,  182 => 64,  180 => 63,  173 => 58,  154 => 51,  146 => 50,  137 => 43,  133 => 41,  126 => 38,  124 => 37,  118 => 34,  112 => 31,  106 => 28,  100 => 25,  94 => 22,  90 => 20,  86 => 19,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'index_admin.html.twig' %}
{% block body  %}

\t<table class=\"table fs-9 mb-0\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:350px;\">IMAGE</th>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:150px;\">PRIVATE KEY</th>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:150px;\">PUBLISH</th>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:150px;\">SUBJECT</th>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:350px;\">DESCRIPTION</th>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\" style=\"width:350px;\">ETAT</th>
\t\t\t\t<th class=\"sort white-space-nowrap align-middle ps-4\" scope=\"col\">RESPONSE</th>
\t\t\t\t<!-- Add this column for responses -->
\t\t\t\t<th class=\"sort text-end align-middle pe-0 ps-4\" scope=\"col\"></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody class=\"list\" id=\"products-table-body\">
\t\t\t{% for reclamation in reclamations %}
\t\t\t\t<tr class=\"position-static\">
\t\t\t\t\t<td class=\"align-middle ps-4\">
\t\t\t\t\t\t<img src=\"{{ asset('images/reclamation/' ~ reclamation.imagePath) }}\" alt=\"Reclamation Image\" width=\"200\" height=\"200\"/>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"align-middle ps-4\">
\t\t\t\t\t\t{{ reclamation.privateKey }}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"align-middle ps-4\">
\t\t\t\t\t\t{{ reclamation.createdAt|date('Y-m-d\\TH:i:sP')|time_ago }}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"align-middle ps-4\">
\t\t\t\t\t\t{{ reclamation.subject }}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"align-middle ps-4\">
\t\t\t\t\t\t{{ reclamation.description }}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"align-middle ps-4\">
\t\t\t\t\t\t{% if reclamation.reponse %}
\t\t\t\t\t\t\t{{ reclamation.reponse.repReclamation }}
\t\t\t\t\t\t\t<span class=\"badge badge-phoenix fs-10 mb-4 badge-phoenix-success\">Done</span>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<span class=\"badge badge-phoenix fs-10 mb-4 badge-phoenix-danger\">Still panding</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"align-middle white-space-nowrap text-end pe-0 ps-4\">
\t\t\t\t\t\t<div class=\"btn-reveal-trigger position-static\">
\t\t\t\t\t\t\t<button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"fas fa-ellipsis-h fs-10\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end py-2\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item add-response\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addResponseModal\" data-reclamation-id=\"{{ reclamation.id }}\" data-reclamation-subject=\"{{ reclamation.subject }}\" data-reclamation-description=\"{{ reclamation.description }}\">Add Response</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item mod-response\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addResponseModal\" data-reclamation-id=\"{{ reclamation.id }}\" data-reclamation-subject=\"{{ reclamation.subject }}\" data-reclamation-description=\"{{ reclamation.description }}\" data-reclamation-response=\"{{ reclamation.reponse ? reclamation.reponse.repReclamation : '' }}\">Mod Rec</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t<!-- Pagination Controls -->
\t<nav aria-label=\"Page navigation\">
\t\t<ul class=\"pagination\">
\t\t\t{% if currentPage > 1 %}
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"{{ path('app_conference', {'page': currentPage - 1}) }}\">Previous</a>
\t\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<span class=\"page-link\">Previous</span>
\t\t\t\t</li>
\t\t\t{% endif %}

\t\t\t{% for i in 1..totalPages %}
\t\t\t\t<li class=\"page-item {{ currentPage == i ? 'active' : '' }}\">
\t\t\t\t\t<a class=\"page-link\" href=\"{{ path('app_conference', {'page': i}) }}\">{{ i }}</a>
\t\t\t\t</li>
\t\t\t{% endfor %}

\t\t\t{% if currentPage < totalPages %}
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"{{ path('app_conference', {'page': currentPage + 1}) }}\">Next</a>
\t\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t<span class=\"page-link\">Next</span>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t</ul>
\t</nav>

\t<div class=\"modal fade\" id=\"addResponseModal\" tabindex=\"-1\" aria-labelledby=\"addResponseModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"addResponseModalLabel\">Add Response to Reclamation</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"modal-body\">
\t\t\t\t\t<!-- Placeholders for reclamation details -->
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Subject:</strong>
\t\t\t\t\t\t<span id=\"reclamationSubject\"></span>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Description:</strong>
\t\t\t\t\t\t<span id=\"reclamationDescription\"></span>
\t\t\t\t\t</p>
\t\t\t\t\t<!-- Form for submitting a response -->
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<label class=\" fw-bold mb-2 error-label\" id=\"error-label\"></label>
\t\t\t\t\t</div>

\t\t\t\t\t<form id=\"responseForm\">
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label for=\"responseText\" class=\"form-label\">Your Response</label>
\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"responseText\" rows=\"3\" required></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"hidden\" id=\"reclamationId\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit Response</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
const deleteButtons = document.querySelectorAll('.delete-reclamation');

deleteButtons.forEach(function (button) {
button.addEventListener('click', function (e) {
e.preventDefault();
const reclamationId = this.getAttribute('data-id');

if (confirm('Are you sure?')) {
fetch (`/delete-reclamation/\${reclamationId}`, { // Update the endpoint to your delete route
method: 'POST',
headers: {
'X-Requested-With': 'XMLHttpRequest'
}
}).then(response => {
if (response.ok) {
document.getElementById (`reclamation-\${reclamationId}`).remove();
window.location.reload();
} else {
window.location.reload();
}
}).catch(error => console.error('Error:', error));
}
});
});
});


\$('#responseForm').submit(function (event) {
event.preventDefault();
var responseText = \$('#responseText').val().trim();
var reclamationId = \$('#reclamationId').val();

\$.ajax({
url: '/reclamation/' + reclamationId + '/add-response',
method: 'POST',
data: {
response: responseText
},
success: function (response) {
alert('Response added successfully');

var rowToUpdate = document.querySelector('tr[data-reclamation-id=\"' + reclamationId + '\"]');
var responseCell = rowToUpdate.querySelector('.response-cell-class');
// Use actual property from response, for example response.newResponse
responseCell.textContent = response.newResponse || 'Done'; // Adjust based on actual response structure
responseCell.classList.remove('badge-phoenix-danger');
responseCell.classList.add('badge-phoenix-success');
},
error: function (xhr, status, error) {
if (xhr.responseJSON && xhr.responseJSON.error === 'VALIDATION_ERROR') {
const errorMessage = xhr.responseJSON.messages.join(', '); // Join error messages with ','
const errorMessagesArray = errorMessage.split(','); // Split the error messages on ','
let errorMessagesHTML = '';
// Initialize an empty string to store HTML for error messages

// Loop through each error message and create HTML for it
errorMessagesArray.forEach((message) => {
errorMessagesHTML += `<div>\${
message.trim()
}</div>`; // Trim whitespace and wrap each message in a <div>
});
\$('.error-label').html(errorMessagesHTML);
} else {
var errorMessage = 'An error occurred';
if (xhr.responseJSON && xhr.responseJSON.error) {
errorMessage = xhr.responseJSON.error;
}
alert(errorMessage);
}
}
});
});

let lastReclamationId = {{ reclamations|length > 0 ? reclamations|first.id : 0 }};

function pollForNewReclamations() {
fetch('/get-latest-reclamations').then(response => response.json()).then(data => {
if (data.reclamations && data.reclamations.length > 0) {
const newReclamations = data.reclamations.filter(reclamation => reclamation.id > lastReclamationId);
if (newReclamations.length > 0) {
lastReclamationId = newReclamations[0].id;
updateTable(newReclamations);
}
}
}).catch(error => console.error('Error fetching latest reclamations:', error));
}

function updateTable(reclamations) {
    const tableBody = document.getElementById('products-table-body');
    reclamations.sort((a, b) => b.id - a.id).forEach(reclamation => {
        const row = document.createElement('tr');
        row.className = 'position-static';
        let responseStatusHTML = reclamation.response ? `<span class=\"badge badge-phoenix fs-10 mb-4 badge-phoenix-success\">Done</span>` : `<span class=\"badge badge-phoenix fs-10 mb-4 badge-phoenix-danger\">Still pending</span>`;

        row.innerHTML = `
            <td class=\"align-middle ps-4\">
              <img src=\"/images/reclamation/\${reclamation.imagePath}\" alt=\"Reclamation Image\" width=\"200\" height=\"200\"/>
            </td>
            <td class=\"align-middle ps-4\">\${reclamation.privateKey}</td>
            <td class=\"align-middle ps-4\">\${reclamation.createdAt}</td>
            <td class=\"align-middle ps-4\">\${reclamation.subject}</td>
            <td class=\"align-middle ps-4\">\${reclamation.description}</td>
            <td class=\"align-middle ps-4\">\${responseStatusHTML}</td>
            <td class=\"align-middle white-space-nowrap text-end pe-0 ps-4\">
              <div class=\"btn-reveal-trigger position-static\">
                <button class=\"btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10\" type=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  <span class=\"fas fa-ellipsis-h fs-10\"></span>
                </button>
                <div class=\"dropdown-menu dropdown-menu-end py-2\">
                  <a class=\"dropdown-item add-response\" href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#addResponseModal\" data-reclamation-id=\"\${reclamation.id}\" data-reclamation-subject=\"\${reclamation.subject}\" data-reclamation-description=\"\${reclamation.description}\">Add Response</a>
                  <a class=\"dropdown-item\" href=\"#\">Reclamation</a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item text-danger delete-reclamation\" href=\"#\" data-id=\"\${reclamation.id}\">Delete Reclamation</a>
                </div>
              </div>
            </td>
          `;
        tableBody.prepend(row);
    });
    // Check if there are new reclamations to notify
    if (reclamations.length > 0) {
        alert('New reclamation added!');
    }
}

document.addEventListener('click', function(event) {
    if (event.target.matches('.add-response, .mod-response')) {
        const reclamationId = event.target.getAttribute('data-reclamation-id');
        const reclamationSubject = event.target.getAttribute('data-reclamation-subject');
        const reclamationDescription = event.target.getAttribute('data-reclamation-description');
        const reclamationResponse = event.target.getAttribute('data-reclamation-response') || '';

        document.getElementById('reclamationSubject').textContent = reclamationSubject;
        document.getElementById('reclamationDescription').textContent = reclamationDescription;
        document.getElementById('reclamationId').value = reclamationId;
        document.getElementById('responseText').value = reclamationResponse; // Set the existing response

        \$('#addResponseModal').modal('show');
    }
});


setInterval(pollForNewReclamations, 10000);
\t</script>

\t<style>
\t\t.input-invalid {
\t\t\tborder-color: #DC143C; /* Change border color to red */
\t\t}

\t\t.input-typing {
\t\t\tborder-color: #50C878;
\t\t}
\t\t.error-label {
\t\t\tcolor: red;
\t\t}
\t</style>


\t<!-- ===============================================-->
<!--    End of Main Content-->
\t<!-- ===============================================-->
{% endblock %}
", "conference/backReclamation.html.twig", "C:\\Users\\khali\\OneDrive - ESPRIT\\Documents\\citiezenHub_webapp\\templates\\conference\\backReclamation.html.twig");
    }
}
