SELECT 
    d.NAME AS Department,
    COUNT(u.ID) AS EmployeeCount,
    AVG(u.SALARY) AS AverageSalary
FROM 
    Users u
JOIN 
    Department d ON u.DEPARTMENT_ID = d.ID
GROUP BY 
    d.NAME;
