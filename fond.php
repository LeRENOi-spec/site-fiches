<div class="spline-background" id="fond-3d"></div>
<script>
    // Le fond 3D n'est téléchargé que sur grand écran, sans "réduire les animations"
    if (window.matchMedia('(min-width: 900px) and (prefers-reduced-motion: no-preference)').matches) {
        var script = document.createElement('script');
        script.type = 'module';
        script.src = 'https://cdn.spline.design/@splinetool/viewer@2.0.79/build/spline-viewer.js';
        document.head.appendChild(script);

        var scene = document.createElement('spline-viewer');
        scene.setAttribute('url', 'https://prod.spline.design/3AGikRcSpOQh5A3G/scene.splinecode');
        document.getElementById('fond-3d').appendChild(scene);
    }
</script>
