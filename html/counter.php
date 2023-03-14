<script type="text/javascript">
                let checkout = <?php echo $_SESSION['checkout']; ?>;
                let current = <?php echo (time() * 1000); ?>;
                let left = checkout - current;
                let timeObj = new Date();

                function timer(left) {
                    if (typeof(timer.count) == 'undefined') {
                        timer.count = left;
                    }
                    timer.count -= 1000;
                    if (timer.count <= 0) {
                        location.replace('/final.php');
                    }
                    timeObj.setTime(timer.count);
                    document.getElementById('timer').innerHTML = timeObj.toLocaleString([], {
                        minute: '2-digit',
                        second: '2-digit'
                    });
                }

                setInterval(timer, 1000, left);
            </script>