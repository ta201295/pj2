<!-- ALL JS FILES -->
<script src="template_web/js/all.js"></script>
<!-- ALL PLUGINS -->
<script src="template_web/js/custom.js"></script>
<script src="template_web/js/timeline.min.js"></script>

<script>
    timeline(document.querySelectorAll('.timeline'), {
        forceVerticalMode: 700,
        mode: 'horizontal',
        verticalStartPosition: 'left',
        visibleItems: 4
    });
</script>

@yield('scripts')
