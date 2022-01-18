</main>


<?php if (is_page('tryout') || is_page('recruit_umpire') || is_page('umpire_apply')) : ?>
<footer class="footer triangle triangle_yellow bg_black posi_r">
    <?php elseif (is_home() && !is_front_page()): ?>
    <footer class="footer bg_black posi_r" id="f_footer">
        <?php else: ?>
        <footer class="footer triangle triangle_white bg_black posi_r">
            <?php endif; ?>
            <?php get_template_part('f_nav'); ?>
        </footer>
        <?php wp_footer(); ?>

        <script>
        (function(d) {
            var config = {
                    kitId: 'utn7uue',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
        </script>
        </body>

        </html>