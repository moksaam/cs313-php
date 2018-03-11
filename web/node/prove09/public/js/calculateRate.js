function calculateRate(type, weight) {

    switch (type) {
        case 'stamped': 
            return getStampedRate(weight);
            break;
        case 'metered':
            return getMeteredRate(weight);
            break;
        case 'flats':
            return getFlatsRate(weight);
            break;
        case 'firstClassRet':
            return getFirstClassRate(weight);
            break;
        default:
            console.error('Error: No Postage Selected.');
            break;
    }
};

function getStampedRate(weight) {
    if (weight <= 1) {
        return 0.50;
    }
    else if (weight <= 2) {
        return 0.71;
    }
    else if (weight <= 3) {
        return 0.92;
    }
    else if (weight <= 3.5) {
        return 1.13;
    }
    else {
        return 'Too heavy please select a different package type.'
        console.error("Too heavy.");        
    }
}

function getMeteredRate(weight) {
    if (weight <= 1) {
        return 0.47;
    }
    else if (weight <= 2) {
        return 0.68;
    }
    else if (weight <= 3) {
        return 0.89;
    }
    else if (weight <= 3.5) {
        return 1.10;
    }
    else {
        return 'Too heavy please select a different package type.'
        console.error("Too heavy.");        
    }
}

function getFlatsRate(weight) {
    if (weight <= 13) {
        return Math.max((weight - 1, 0) * 0.21) + 1;
    }
    else {
        return 'Too heavy please select a different package type.'
        console.error("Too heavy.");
    }
}

function getFirstClassRate(weight) {
    switch (weight) {
        case 1:
        case 2:
        case 3:
        case 4:
            return 3.50;
            break;
        case 5:
        case 6:
        case 7:
        case 8:
            return 3.75
            break;
        case 9:
            return 4.10;
            break;
        case 10:
            return 4.45;
            break;
        case 11:
            return 4.80;
            break;
        case 12:
            return 5.15;
            break;
        case 13:
            return 5.50;
            break;
        default:
            console.error('Too heavy');
            return 'Too heavy please select a different package types.';
            break;
    }
}