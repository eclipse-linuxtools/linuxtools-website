var eclipse_org_common = { "settings": { "cookies_class": { "name": "eclipse_settings", "enabled": 1 } } };

window.onscroll = function() {
	const footer = document.querySelector("#footer>div>a");
	footer.style.display = document.documentElement.scrollTop > 100 ? 'inline' : 'none';
};

const projectBase = new URL(".", document.currentScript.src).href;

const projectsEclipse = 'https://projects.eclipse.org/projects/';
const apiProjects = 'https://projects.eclipse.org/api/projects/';
const apiGitHub = 'https://api.github.com/repos/eclipse-platform/www.eclipse.org-eclipse/contents/';
const downloads = 'https://download.eclipse.org/linuxtools/update';
const gitHubOrg = 'https://github.com/eclipse-linuxtools/';

// let logo = `${projectBase}modeling.png`;
let logo = 'https://projects.eclipse.org/modules/custom/eclipsefdn/eclipsefdn_projects/images/logos/default.png';
let home = `${projectBase}index.html`;

const meta = toElements(`
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="https://eclipseide.org/favicon.ico"/>
`);

let defaultHeader = toElements(`
	<a href="https://www.eclipse.org/downloads/packages/">Eclipse IDE</a>
	<a href="https://eclipseide.org/working-group/">Working Group</a>
	<a href="https://marketplace.eclipse.org/">Marketplace</a>
`);

let defaultBreadcrumb = toElements(`
	<a href="https://eclipseide.org/">Home</a>
	<a href="https://eclipseide.org/projects/">Projects</a>
`);

let defaultNav = toElements(`
<a class="fa-download" target="_self" href="${projectBase}downloads.html"
	title="Downloads: Update Sites">
	Downloads<p>Update Site</p>
</a>
<a class="fa-map-o" target="_out" href="https://projects.eclipse.org/projects/tools.linuxtools/"
	title="Project: Portal">
	Project<p>Portal</p>
</a>
<a class="fa-book" target="_out" href="https://help.eclipse.org/" title="Documentation: help.eclipse.org">
	Documentation<p>help.eclipse.org</p>
</a>
<a class="fa-git" target="_out" href="${gitHubOrg}"
	title="Git: Project Repository">
	Git<p>Project Repository</p>
</a>
`);

let defaultAside = toElements(`
<span class="separator"><i class='fa fa-cube'></i> Subprojects</span>
<a href="${projectBase}projectPages/callgraph/index.html">Callgraph</a>
<a href="${projectBase}projectPages/changelog/index.html">ChangeLog</a>
<a href="${projectBase}projectPages/docker/index.html">Docker Tooling</a>
<a href="${projectBase}projectPages/gcov/index.html">GCov</a>
<a href="${projectBase}projectPages/gprof/index.html">GProf</a>
<a href="${projectBase}projectPages/javadocs/index.html">Javadocs Plug-in</a>
<a href="${projectBase}projectPages/libhover/index.html">Libhover</a>
<a href="${projectBase}projectPages/manpage/index.html">Man Page</a>
<a href="${projectBase}projectPages/perf/index.html">Perf</a>
<a href="${projectBase}projectPages/specfile/index.html">RPM</a>
<a href="${projectBase}projectPages/systemtap/index.html">Systemtap</a>
<a href="${projectBase}projectPages/valgrind/index.html">Valgrind</a>
`);

let additionalAside = `
<div style="float: right;" class="col-md-6">
	<aside>
		<ul class="ul-left-nav">
			<div style="padding-top: 1.5em; padding-left: 1.5em;">
				<div id="news" class="sideitem">
					<h2>News</h2>
					<ul>
						<li><em>2023-06-14</em>: <a target="_out" href="${downloads}">8.11.0 released</a></li>
						<li><em>2023-03-15</em>: <a target="_out" href="${downloads}">8.10.0 released</a></li>
						<li><em>2022-12-07</em>: <a target="_out" href="${downloads}">8.9.0 released</a></li>
						<li><em>2022-09-14</em>: <a target="_out" href="${downloads}">8.8.0 released</a></li>
						<li><em>2022-06-15</em>: <a target="_out" href="${downloads}">8.7.0 released</a></li>
						<li><em>2022-03-16</em>: <a target="_out" href="${downloads}">8.6.0 released</a></li>
						<li><em>2021-12-08</em>: <a target="_out" href="${downloads}">8.5.0 released</a></li>
						<li><em>2021-09-15</em>: <a target="_out" href="${downloads}">8.4.0 released</a></li>
						<li><em>2021-06-15</em>: <a target="_out" href="${downloads}">8.3.0 released</a></li>
						<li><em>2021-03-17</em>: <a target="_out" href="${downloads}">8.2.0 released</a></li>
					</ul>
				</div>
			</div>
		</ul>
	</aside>
</div>`;

function generate() {
	try {
		const head = document.head;
		var referenceNode = head.querySelector('script');
		for (const element of [...meta]) {
			head.insertBefore(element, referenceNode.nextElementSibling)
			referenceNode = element;
		}

		const generators = document.querySelectorAll('[data-generate]');
		for (const element of generators) {
			const generator = element.getAttribute('data-generate');
			const generate = new Function(generator);
			generate.call(element, element);
		}

		const generatedBody = generateBody();
		document.body.replaceChildren(...generatedBody);
	} catch (exception) {
		document.body.prepend(...toElements(`<span>Failed to generate content: <span><b style="color: FireBrick">${exception.message}</b><br/>`));
		console.log(exception);
	}
}

function generateDefaults(element) {
	const parts = [];
	if (!hasElement('header')) {
		parts.push(generateDefaultHeader(document.createElement('div')));
	}
	if (!hasElement('breadcrumb')) {
		parts.push(generateDefaultBreadcrumb(document.createElement('div')));
	}
	if (!hasElement('aside')) {
		parts.push(generateDefaultAside(document.createElement('div')));
	}
	if (!hasElement('nav')) {
		parts.push(generateDefaultNav(document.createElement('div')));
	}
	element.prepend(...parts);
}

function generateBody() {
	const col = document.getElementById('aside') ? 'col-md-18' : ' col-md-24';
	return toElements(`
<div>
	${generateHeader()}
	<main id="content">
		<div class="novaContent container" id="novaContent">
			<div class="row">
				<div class="${col} main-col-content">
					<div class="novaContent" id="novaContent">
						<div class="row">
							${generateBreadcrumb()}
						</div>
						<div class=" main-col-content">
							${generateNav()}
							<div id="midcolumn">
							${generateMainContent()}
							</div>
						</div>
					</div>
				</div>
				${generateAside()}
				${generateAdditionalAside()}
			</div>
		</div>
	</main>
	<footer id="footer">
		<div class="container">
			<a href="#" class="scrollup" onclick="scrollToTop()">Back to the top</a>
		</div>
	</footer>
</div>
`);
}

function generateMainContent() {
	const main = document.body.querySelector('main')
	if (main != null) {
		return main.innerHTML;
	}
	return `
<main>The body specifies no content.</main>
`;
}

function generateDefaultHeader(element) {
	return prependChildren(element, 'header', ...defaultHeader);
}

function generateHeader() {
	const elements = document.querySelectorAll('#header>a');
	const items = Array.from(elements).map(link => {
		link.classList.add('link-unstyled');
		return `
<li class="navbar-nav-links-item">
	${link.outerHTML}
</li>
`;
	});
	const mobileItems = Array.from(elements).map(link => {
		link.className = 'mobile-menu-item mobile-menu-dropdown-toggle';
		return `
<li class="mobile-menu-dropdown">
	${link.outerHTML}
</li>
`;
	});

	return `
<header class="header-wrapper" id="header">
	<div class="header-navbar-wrapper">
		<div class="container">
			<div class="header-navbar">
				<a class="header-navbar-brand" href="https://eclipseide.org/">
					<div class="logo-wrapper">
						<img src="https://eclipse.dev/eclipse.org-common/themes/solstice/public/images/logo/eclipse-ide/eclipse_logo.svg" alt="Eclipse Project" width="150"/>
					</div>
				</a>
				<nav class="header-navbar-nav">
					<ul class="header-navbar-nav-links">
						${items.join('\n')}
					</ul>
				</nav>
				<div class="header-navbar-end">
					<div class="float-right hidden-xs" id="btn-call-for-action">
						<a target="_out" href="https://www.eclipse.org/sponsor/ide/" class="btn btn-huge btn-warning">
							<i class="fa fa-star"></i> Sponsor
						</a>
					</div>
					<button class="mobile-menu-btn" onclick="toggleMenu()">
						<i class="fa fa-bars fa-xl"/></i>
					</button>
				</div>
			</div>
		</div>
	</div>
	<nav id="mobile-menu" class="mobile-menu hidden" aria-expanded="false">
		<ul>
			${mobileItems.join('\n')}
		</ul>
	</nav>
</header>
`;
}

function generateDefaultBreadcrumb(element) {
	return prependChildren(element, 'breadcrumb', ...defaultBreadcrumb);
}

function generateBreadcrumb() {
	const breadcumbs = document.getElementById('breadcrumb')
	if (breadcumbs == null) {
		return '';
	}

	const elements = breadcumbs.children;
	const items = Array.from(elements).map(link => `<li>${link.outerHTML}</li>`);

	return `
<section class="default-breadcrumbs hidden-print breadcrumbs-default-margin"
	id="breadcrumb">
	<div class="container">
		<h3 class="sr-only">Breadcrumbs</h3>
		<div class="row">
			<div class="col-sm-24">
				<ol class="breadcrumb">
					${items.join('\n')}
				</ol>
			</div>
		</div>
	</div>
</section>
`;
}

function generateDefaultNav(element) {
	return prependChildren(element, 'nav', ...defaultNav);
}

function generateNav() {
	const elements = document.body.querySelectorAll('#nav>a');
	if (elements.length == 0) {
		return '';
	}

	const items = Array.from(elements).map(element => {
		const href = element.getAttribute('href')
		const target = element.getAttribute('target') ?? "_self";
		const title = element.getAttribute('title') ?? '';
		const className = element.className ?? '';
		const content = element.innerHTML;
		return `
<li class="col-xs-24 col-md-12">
	<a class="row" href="${href}" title="${title}"
		target="${target}">
		<i class="col-xs-3 col-md-6 fa ${className}"></i>
		<span class="col-xs-21 c col-md-17">${content}
		</span>
	</a>
</li>
`;
	});

	return `
<div class="header_nav">
	<div class="col-xs-24 col-md-10 vcenter">
		<a href="${home}">
			<img src="${logo}" alt="The Main Index Page" xwidth="50%" xheight="auto" class="img-responsive header_nav_logo"/>
		</a>
	</div><!-- NO SPACES
 --><div class="col-xs-24 col-md-14 vcenter">
		<ul class="clearfix">
			${items.join('\n')}
		</ul>
	</div>
</div>
`;
}

function generateDefaultAside(element) {
	return prependChildren(element, 'aside', ...defaultAside);
}

function generateAside() {
	const elements = document.body.querySelectorAll('aside>*,#aside>*');
	if (elements.length == 0) {
		return '';
	}

	const items = Array.from(elements).map(element => {
		const main = element.classList.contains('separator')
		element.classList.add('link-unstyled');
		if (main) {
			element.classList.add('main-sidebar-heading');
			return `
<li class="main-sidebar-main-item main-sidebar-item-indented separator">
	${element.outerHTML}
</li>
`
		} else {
			return `
<li class="main-sidebar-item main-sidebar-item-indented">
	${element.outerHTML}
</li>
`
		}
	});

	return `
<div class="col-md-6 main-col-sidebar-nav">
	<aside class="main-sidebar-default-margin" id="main-sidebar">
		<ul class="ul-left-nav" id="leftnav" role="tablist" aria-multiselectable="true">
			${items.join('\n')}
	</aside>
</div>
`;
}

function generateAdditionalAside() {
	return additionalAside;
}

function sendRequest(location, handler) {
	var request = new XMLHttpRequest();
	request.open('GET', location);
	request.onloadend = function() {
		handler(request);
	};
	request.send();
}

function hasElement(id) {
	return document.getElementById(id) != null;
}

function toElements(text) {
	const wrapper = document.createElement('div');
	wrapper.innerHTML = text;
	return wrapper.children
}

function replaceChildren(element, id, ...children) {
	element.id = id;
	element.replaceChildren(...children);
	return element;
}

function prependChildren(element, id, ...children) {
	element.id = id;
	element.prepend(...children);
	return element;
}

function addBase(htmlDocument, location) {
	const base = htmlDocument.createElement('base');
	base.href = location;
	htmlDocument.head.appendChild(base);
}

function getQueryParameter(id) {
	const location = new URL(window.location);
	const search = new URLSearchParams(location.search);
	return search.get(id);
}

function toggleMenu() {
	const mobileMenu = document.getElementById('mobile-menu')
	if (mobileMenu.classList.contains('hidden')) {
		mobileMenu.classList.remove('hidden');
	} else {
		mobileMenu.classList.add('hidden');
	}
}

function scrollToTop() {
	window.scrollTo({ top: 0, behavior: 'smooth' });
}
