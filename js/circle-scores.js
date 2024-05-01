/* 
Description: this file contains the logic for the circle scores in the home page.
The script does:
1. Get the circle by id
2. Make animation for the circle
3. Set animation to the circle

IMPORTANT: @keyframes are defined in the css file (css/custom.css)

 */

function extractNumber(element) {
    return element.text().match(/\d+/)[0];
}

// Define id's of the circles
const circles = ['HTMLCSS', 'CSHARP', 'JavaScript', 'PHP', 'Laravel', 'MySQL', 'Bootstrap', 'Security'];

// Loop through the circles and make all the logic
circles.forEach(circle => {
    // Get the circle by id and its name
    const circleElement = $(`#${circle}`);
    const circleToAnimate = circleElement.find('circle');
    const circleName = circleElement.attr('id');

    // Make animation for this circle
    const animationName = circleName;
    const animationDuration = '1s';
    const animationTimingFunction = 'linear';
    const animationFillMode = 'forwards';
    const animation = `${animationName} ${animationDuration} ${animationTimingFunction} ${animationFillMode}`;
    
    // Set animation to the circle
    circleToAnimate.css('animation', animation);
});