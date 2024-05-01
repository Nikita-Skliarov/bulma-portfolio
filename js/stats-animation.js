const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counts = document.querySelectorAll('.count');
        const speed = 100; // 100 milliseconds

        counts.forEach(count => {
          const updateCount = () => {
            const target = +count.getAttribute('data-target');
            const countValue = +count.innerText;

            const increment = (target - countValue) / speed;

            if (countValue < target) {
              count.innerText = Math.ceil(countValue + increment);
              setTimeout(updateCount, 1);
            } else {
              count.innerText = target;
            }
          };

          updateCount();
        });

        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  observer.observe(document.querySelector('.columns'));