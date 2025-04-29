
@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="hero-wrapper">
  <div class="hero-content">
    <!-- Background Image -->
    <img class="hero-image" src="https://framerusercontent.com/images/s1Gw9pyuUEC9vViCqmou6hRgI.webp?scale-down-to=2048" alt="Chair" />

    <!-- Left Text Box -->
    <div class="hero-text">
      <h1>Crafting Comfort,<br>Inspired by the North</h1>
      <p>Crafted for style and lasting durability,<br>perfect for any space.</p>
      <a href="#" class="cta">View Product</a>
    </div>

    <!-- Navigation Arrows -->

    <button class="nav-btn left" style="margin-left: 20px; background-color:black; color:white;" >&#10094;</button>
    <button class="nav-btn right"style="margin-right: 40px; background-color:black; color:white;">&#10095;</button>

    <!-- Hotspots -->
<div class="hotspot">
   <svg  style=" border-radius:300px;background-color:white;position: absolute; top: 28%; left:37%; transform: translate(-50%, -50%);"
   width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 6.72223V17.2778" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17.2778 12H6.72223" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 21.5C17.2467 21.5 21.5 17.2467 21.5 12C21.5 6.7533 17.2467 2.5 12 2.5C6.7533 2.5 2.5 6.7533 2.5 12C2.5 17.2467 6.7533 21.5 12 21.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

<svg  style=" border-radius:300px;background-color:white;position: absolute; top: 34%; left: 55%; transform: translate(-50%, -50%);"
   width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 6.72223V17.2778" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17.2778 12H6.72223" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 21.5C17.2467 21.5 21.5 17.2467 21.5 12C21.5 6.7533 17.2467 2.5 12 2.5C6.7533 2.5 2.5 6.7533 2.5 12C2.5 17.2467 6.7533 21.5 12 21.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

<svg  style=" border-radius:300px;background-color:white;position: absolute; top: 44%; left: 64%; transform: translate(-50%, -50%);"
   width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 6.72223V17.2778" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17.2778 12H6.72223" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 21.5C17.2467 21.5 21.5 17.2467 21.5 12C21.5 6.7533 17.2467 2.5 12 2.5C6.7533 2.5 2.5 6.7533 2.5 12C2.5 17.2467 6.7533 21.5 12 21.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</div>
    <!-- Dots Indicator -->
  <div class="dots">
    <button aria-label="Scroll to page 1" type="button" style="border:none;display:flex;place-content:center;place-items:center;overflow:hidden;background:transparent;cursor:pointer;margin:0;padding:10px 5px 10px 5px"><div style="border-radius: 50%; background: rgb(255, 255, 255); cursor: pointer; border: none; place-content: center; place-items: center; padding: 0px; width: 10px; height: 10px; opacity: 0.5; will-change: transform;"></div></button>
    <button aria-label="Scroll to page 2" type="button" style="border:none;display:flex;place-content:center;place-items:center;overflow:hidden;background:transparent;cursor:pointer;margin:0;padding:10px 5px 10px 5px"><div style="border-radius: 50%; background: rgb(255, 255, 255); cursor: pointer; border: none; place-content: center; place-items: center; padding: 0px; width: 10px; height: 10px; opacity: 0.5; will-change: transform;"></div></button>
    <button aria-label="Scroll to page 3" type="button" style="border:none;display:flex;place-content:center;place-items:center;overflow:hidden;background:transparent;cursor:pointer;margin:0;padding:10px 5px 10px 5px"><div style="border-radius: 50%; background: rgb(255, 255, 255); cursor: pointer; border: none; place-content: center; place-items: center; padding: 0px; width: 10px; height: 10px; opacity: 0.5; will-change: transform;"></div></button>  
  </div>

  </div>
</section>

@endsection
