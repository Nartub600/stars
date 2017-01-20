<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta property="og:url" content="{{ url('share-promise') . '?pid=' . $pid . '&t=' . $t }}"/>
        <meta property="og:description" content="Show your love for Augustus and Hazel's little infinity by making your own promise to live a meaningful life. And, your hometown could get a #TFIOS bench dedicated to Hazel & Gus. {{ $promise->url ? $promise->url : route('home') }} #TFIOSLittleInfinity"/>
        <meta property="og:image" content="{{ $promise->s3_url }}" />
        <meta property="og:site_name" content="Little Infinities Galaxy" />
        <meta property="og:type" content="website" />
        <meta name="og:keywords" content="the fault in our stars, fault in our stars, Shailene Woodley, Ansel Elgort, Laura Dern, Nat Wolff, Josh Boone, John Green, Scott Neustadter, Michael H. Weber" />
        <title>Little Infinities Galaxy</title>