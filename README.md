# Running CodeIgniter 4 Application Locally

This guide explains how to run an existing **CodeIgniter 4** application on your local environment.

## Prerequisites

Before starting, make sure you have **PHP** (version 7.4 or higher) installed on your system.

### 1. Clone or Download the Project

If you don't have the project, clone it from the GitHub repository:

```bash
https://github.com/rrtutors/AdvanceAlarmaManager.git
```

### 2. Run the Local Server

Open a terminal and navigate to your project folder, then run the following command to start the local server

```bash
php spark serve
```

This command will run the application on http://localhost:8080 by default.

### 3. Access the Application

Open your browser and go to http://localhost:8080 to view the CodeIgniter 4 application running locally.

### 4. If you get an error
```bash
'php' is not recognized as an internal or external command,
operable program or batch file.
```
This happens because Windows cannot find the PHP executable (php.exe) in its system PATH.

### 5. Add PHP to Environment Variables
1. Open System Properties:
   - Press `Win + R`, type `sysdm.cpl`, and hit `Enter`.
   - Go to the **Advanced** tab and click on **Environment Variables**.

2. Edit the PATH variable:
   - Under **System Variables**, scroll down and find `Path`.
   - Select it and click **Edit**.
   - Click **New**, then add your PHP installation path (e.g., `C:\xampp\php\`).
   - Click **OK** to save the changes.
3. Restart terminal and try again `php spark serve`