function calculateDeliveryTime(dayOfWeek, orderHour) {
    const workingHoursStart = 8;
    const workingHoursEnd = 16;
    const afterWorkingHoursStart = 16;
    const afterWorkingHoursEnd = 22;

    if (dayOfWeek === 0) {
        // Воскресенье - заказы не принимаем
        return 'В воскресенье мы не работаем. Пожалуйста, выберите другой день для заказа.';
    }

    if (orderHour >= 0 && orderHour < workingHoursStart) {
        return `Заказ будет доставлен на ${days[dayOfWeek]} с ${workingHoursStart}:00 до ${workingHoursEnd}:00.`;
    } else if (orderHour >= workingHoursStart && orderHour <= workingHoursEnd) {
        return `Заказ будет доставлен после ${afterWorkingHoursStart}:00 до ${afterWorkingHoursEnd}:00.`;
    } else if (orderHour > workingHoursEnd && orderHour <= afterWorkingHoursEnd) {
        const nextWorkDay = dayOfWeek === 6 ? 1 : dayOfWeek + 1;
        return `Заказ будет доставлен на ${days[nextWorkDay]} с ${workingHoursStart}:00 до ${workingHoursEnd}:00.`;
    } else {
        const nextWorkDay = dayOfWeek === 6 ? 1 : dayOfWeek + 1; // Если суббота, следующий день - понедельник, иначе следующий день.
        return `Заказ будет доставлен на ${days[nextWorkDay]} с ${workingHoursStart}:00 до ${workingHoursEnd}:00.`;
    }
}

const days = ['воскресенье', 'понедельник', 'вторник', 'среду', 'четверг', 'пятницу', 'субботу'];

function calculateDelivery() {
    const dayOfWeek = parseInt(document.getElementById('dayOfWeek').value, 10);
    const orderHour = parseInt(document.getElementById('orderHour').value, 10);

    const resultElement = document.getElementById('result');
    const deliveryTime = calculateDeliveryTime(dayOfWeek, orderHour);

    resultElement.textContent = deliveryTime;
}