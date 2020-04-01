<meta name="description" content="lalalalala">

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ config('app.name') }}">
<meta itemprop="description" content="This is the page description">
<meta itemprop="image" content="{{ asset('logo.jpg') }}">

<!-- Twitter Card data -->
<meta name="twitter:card" content="product">
<!-- <meta name="twitter:site" content="@publisher_handle"> -->
<meta name="twitter:title" content="{{ config('app.name') }}">
<meta name="twitter:description" content="Page description less than 200 characters">
<meta name="twitter:creator" content="@flavius2105">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="{{ asset('logo.jpg') }}">

<!-- Open Graph data -->
<meta property="og:title" content="{{ config('app.name') }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{ config('app.url') }}" />
<meta property="og:image" content="{{ asset('logo.jpg') }}" />
<meta property="og:description" content="Description Here" />
<meta property="og:site_name" content="{{ config('app.name') }}" />

<!-- <meta property="article:published_time" content="2013-09-17T05:59:00+01:00" />
<meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" />
<meta property="article:section" content="Article Section" />
<meta property="article:tag" content="Article Tag" />
<meta property="fb:admins" content="Facebook numberic ID" /> -->

<link rel="home" href="{{ config('app.url') }}">